$(document).ready(function() {

    $(".click").click(function(){
        //div.style.display='';
       $("#editclient").show();
      });
      
    $(document).on('click','#edit', function() { 
      var editable_elements = document.querySelectorAll("[contenteditable=false]");
      editable_elements[0].setAttribute("contenteditable", true);
      editable_elements[1].setAttribute("contenteditable", true);
      editable_elements[2].setAttribute("contenteditable", true);
      editable_elements[3].setAttribute("contenteditable", true);
      editable_elements[4].setAttribute("contenteditable", true);
      editable_elements[5].setAttribute("contenteditable", true);
      editable_elements[6].setAttribute("contenteditable", true);
      editable_elements[7].setAttribute("contenteditable", true);
      editable_elements[8].setAttribute("contenteditable", true);
      editable_elements[9].setAttribute("contenteditable", true);
      editable_elements[10].setAttribute("contenteditable", true);
      
  /*var input = "<input type='text' id='temp' style='width:130px;' value=" + $(this).text() + " >";
        $(this).text("");
        $(this).append(input);
        $("input#temp").focus();
        $("input").blur(function () {
            if ($(this).val() == "") {
                $(this).remove();
            } else {
                $(this).closest("td").text($(this).val());
            }
        });*/
    });
});