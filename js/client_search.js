function edit(){
      var editable_elements = document.querySelectorAll("[contenteditable=false]");
      for (i=0;i<editable_elements.length;i++){
      editable_elements[i].setAttribute("contenteditable", true);
      document.getElementById('edit').setAttribute('value','儲存');
      };
      document.getElementById('edit').onclick=function(){
      save();
      };
 }
function save(){
        var editable_elements = document.querySelectorAll("[contenteditable=true]");
        for (i=0;i<editable_elements.length;i++){
            var xs=editable_elements[i].value;
            var cxs=editable_elements[i].value;
            editable_elements[i].setAttribute("contenteditable", false);
            cxs=xs;
            document.getElementById('edit').setAttribute('value','編輯');
          };
            document.getElementById('edit').onclick=function(){
            edit();
      };
}

/*$(document).ready(function() {
  $(".detail").click(function(){
        //div.style.display='';
       $("#data").show();
      });*/
 

});
