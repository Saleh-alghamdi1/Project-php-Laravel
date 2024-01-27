<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;


class ItemsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function GetItemsGroup()
    {
    $data=Itemgroup::All();
    return view ('itemgroup',['data'=>$data]);
    }
    public function SaveGroupsItems(Request $request)
    {
        $data=Itemgroup::create([
            'Itemgroupsname'=>$request->Itemgroupsname
        ]);
        $data->save();
        return redirect('addgritem');
    }
            //دالة الحذف
            public function del($x)
            {
                $item=Itemgroup::find($x);
                $item->delete();

                return redirect('itemgroup');
            }
            //دالة التعديل
            public function Edit($x)
            {
                $item=Itemgroup::where('id',$x)
                ->first();
                return view('editgroupitem',['item'=>$item]);
                
            }
            //دالة التحديث وتعديل البيانات
            public function Update(Request $request)
            {
                $item=Itemgroup::find($request->id);
                $item->Itemgroupsname=$request->namegroup;
                    $item->save();
                    return redirect('itemgroup');
            }
//////////////////////////////////////////////////////////////////////////////////////////////////

    //items دالة استعراض صفحة 
    public function GetItem()
    {
    $data=Items::All();
    return view ('items',['data'=>$data]);
    }

    //دالة الحفظ في قاعدة البيانات 
    public function SaveItem(Request $request)
    {
        $data=Items::create([
            'itemname'=>$request->itemname,
            'price'=>$request->price,
            'color'=>$request->color,
            'qty'=>$request->qty,
            'description'=>$request->description,
            'image'=>$request->image, 
            'itemgroupno'=>$request->itemgroupno 
        ]);
        $data->save();
        return redirect('additem');
    }

          //دالة الحذف
          public function Delitem($x)
          {
              $item=Items::find($x);
              $item->delete();

              return redirect('item');
}
            //دالة التعديل
            public function Edititem($x)
            {
                $item=Items::where('id',$x)
                ->first();
                return view('edititems',['item'=>$item]);
                
            }
             //دالة التحديث وتعديل البيانات
             public function Updateitem(Request $request)
             {
                 $item=Items::find($request->id);
                 $item->itemname=$request->nameitem;
                 $item->price=$request->priceitem;
                 $item->color=$request->coloritem;
                 $item->qty=$request->qtyitem;
                 $item->description=$request->descriptionitem;
                 $item->image=$request->imageitem;   
                 $item->itemgroupno=$request->itemgroupnoitem;
                     $item->save();
                     return redirect('item');
             }
             ////////////////////////////////////////////////////////////////////////////////////


             public function invoice()
             {
               
                 return view('dashboard.invoice');
             }

            public function displayadditems()
            {
                $data=Items::All();
                return view('dashboard.additem',['data'=>$data]);
            }


             public function DisplayItems()
             {
                $data=DB::table('itemgroups')
                ->join('items','itemgroups.id','=','items.itemgroupno')
                ->get();
                return view('dashboard.controlpanel',['data'=>$data]);

             }

             public function displayadditemsgroup()
             {
                $data=Itemgroup::All();
                return view ('dashboard.addgroupsitem',['data'=>$data]);

             }

             public function logout()
             {
                Auth::logout();
                return redirect('login');
             }

             public function ShowItemGroup()
             {
                $data=Itemgroup::All();
                $count=$data->count();
                return view ('welcome',['data'=>$data,'count'=> $count]);
             }
             public function Showproduct($id)
             {
                $data=Items::where('itemgroupno',$id)
                ->get();
                Session::put('id',$id);
                return view ('showproduct',['data'=>$data]);
             }

             public function AddtoCart($id)
             {
               
            DB::table('cart')->insert(['iditem' => $id]);//save to cart table
            $idgroup=Session::get('id');
            $count=DB::table('cart')->get()->count();
            Session::put('countitem',$count);
            return redirect('showproduct/'. $idgroup ); //redirect to showproduct page blade
             }

             public function Checkout()

             {
                return view('checkout');
             }
             /////////////////////////////////////////////////////////////////////////////////

             ///Api 
}               
