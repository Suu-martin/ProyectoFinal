<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqsController extends Controller
{
    public function list()
    {
      $faqs = Faq::all();

      $vac = compact("faqs");

      return view("faq/faq", $vac);
    }

    public function detail($id) {
      $faq = Faq::find($id);

      $vac = compact("faq");

      return view("/admin/detailFaq", $vac);
    }

    public function delete(Request $form) {
      $id = $form["id"];

      $faq = Faq::find($id);

      $faq->delete();

      return redirect("/admin/faqList");
    }

    public function addform() {
      return view("/admin/addFaq");
    }


    public function add(Request $request){
        $newFaq = new Faq();
        $newFaq->question = $request["question"];
        $newFaq->answer = $request["answer"];
        $newFaq->save();
        return redirect("/admin/faqList");
        }

    public function li()
    {
      $faqs = Faq::all();

      $vac = compact("faqs");

      return view("/admin/faqList", $vac);
    }
  }
