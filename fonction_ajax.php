
function getxhr(){
   var xhr=null;
  //  les navigateurs autre que IE
  if(window.XMLHttpRequest){
    Xhr=newXMLHttpRequest();
  }else if(window.ActiveXobject);  //si c'est du IE
      deux cas selon les versions
      try{
        xhr =new ActiveXobject("msxml2XMLHTTP");
      }
      CATCH(e){
        xhr = new ActiveXobject("microsoft.XMLHTTP");
      }
      else{
        alert("achetez-vous une autre machine");
        xhr=false;

      }
      return xhr;
}
