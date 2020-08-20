@extends('layouts.app')

@section('content')

@section('title' ,'Sample | Quest')


<section class="l-container"> 
 

  <article>

 
  Q1）
  
  <br>
  <br>
  <div class="card c-card">
    
    <div class="card-body c-card-body">
    
      <p class="card-text c-card-text">
        新しく作られたファイルがaddされないのは？
        
      </p>
    </div>
  </div>

      <ul class="list-group p-list-group js-question-1">
        <li id="0-0-1" class="list-group-item c-list-group-item c-su" >git add -u</li>
      
        <li id="0-0-2"class="list-group-item c-list-group-item c-miss" >git add -A</li>
      
        <li id="0-0-3" class="list-group-item c-list-group-item c-miss" >git add .</li>
      
      </ul>

      
      <div class="card c-card-answer c-card-1-su-answer">
        
        <p class="card-text c-card-answer-sutext ">正解！</p>
        
        <div class="card-footer c-card-footer">
          ・ 変更・削除されたファイルはaddされます。
        </div>
      </div>


      <div class="card c-card-answer c-card-1-miss-answer">
      
        <p class="card-text c-card-answer-misstext ">不正解！</p>
      
      <div class="card-footer c-card-footer">
       ・ git add -A と git add . は新しく作られたファイルがaddされます。
      </div>
    </div>

  </article>



  <article>

  Q2）
  
  <br>
  <br>
  <div class="card c-card">
    
    <div class="card-body c-card-body">
    
      <p class="card-text c-card-text">
        直前のコミットを修正するには？
        
      </p>
    </div>
  </div>

      <ul class="list-group p-list-group js-question-2">
        <li id="0-0-4" class="list-group-item c-list-group-item c-miss" >git commit -a</li>
      
        <li id="0-0-5"class="list-group-item c-list-group-item c-miss" >git commit -v</li>
      
        <li id="0-0-6" class="list-group-item c-list-group-item c-su" >git commit --amend </li>
      
      </ul>

      
      <div class="card c-card-answer c-card-2-su-answer">
        
        <p class="card-text c-card-answer-sutext ">正解！</p>
        
        <div class="card-footer c-card-footer">
          ・コミットし忘れたファイルを後から追加する<br>
          ・直前のコミットコメントを修正する 

        </div>
      </div>


      <div class="card c-card-answer c-card-2-miss-answer">
      
        <p class="card-text c-card-answer-misstext ">不正解！</p>
      
      <div class="card-footer c-card-footer">
        ・ git commit -v  変更点を表示してコミットする<br>
        ・ git commit -a  新規ファイルを除く変更のあったファイルすべてをコミット
      </div>
    </div>


  </article>

  
  </section>
  

@endsection


@section('js-area')

<script>

  $(function(){
  $(".js-question-1 li").on("click", function(e) {

    if(e.target.className !== "list-group-item c-list-group-item c-su"){

      $("#0-0-1").addClass("active disabled")
      $("#0-0-2").addClass("list-group-item-danger disabled")
      $("#0-0-3").addClass("list-group-item-danger disabled")
      $(".c-card-1-miss-answer").fadeIn(500)

     
    }else{
      $("#0-0-1").addClass("active disabled")
      $("#0-0-2").addClass("list-group-item-danger disabled")
      $("#0-0-3").addClass("list-group-item-danger disabled")
      $(".c-card-1-su-answer").fadeIn(500)
     
    }
  });
  });
  $(function(){
  $(".js-question-2 li").on("click", function(e) {

    if(e.target.className !== "list-group-item c-list-group-item c-su"){

      $("#0-0-6").addClass("active disabled")
      $("#0-0-5").addClass("list-group-item-danger disabled")
      $("#0-0-4").addClass("list-group-item-danger disabled")
      $(".c-card-2-miss-answer").fadeIn(500)

     
    }else{
      $("#0-0-6").addClass("active disabled")
      $("#0-0-5").addClass("list-group-item-danger disabled")
      $("#0-0-4").addClass("list-group-item-danger disabled")
      $(".c-card-2-su-answer").fadeIn(500)
     
    }
  });
  });

  </script>

@endsection
