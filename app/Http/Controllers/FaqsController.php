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

      return view("faq/detailFaq", $vac);
    }

    public function delete(Request $form) {
      $id = $form["id"];

      $faq = Faq::find($id);

      $faq->delete();

      return redirect("/faq");
    }

    public function addform() {
      return view("/faq/addFaq");
    }


    public function add(Request $request){

      //  return $req->all(); (verificar si se envian los datos)
        $newFaq = new Faq();

        $newFaq->question = $request["question"];
        $newFaq->answer = $request["answer"];

        $newFaq->save();

        return redirect("/faq");
        }

        public function li()
        {
          $faqs = Faq::all();

          $vac = compact("faqs");

          return view("faq/faqList", $vac);
        }
  }
