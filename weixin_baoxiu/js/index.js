if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement("style")
  msViewportStyle.appendChild(
    document.createTextNode(
      "@-ms-viewport{width:auto!important}"
    )
  )
  document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
}

function form_Validator(theForm)
{
  if (theForm.title.value == "")
  {
    alert("请输入标题");
    theForm.title.focus();
    return (false);
  }
   if (theForm.content.value == "")
  {
    alert("请输入详细问题");
    theForm.content.focus();
    return (false);
  }

  if (confirm("你确定要提交报修信息吗？"))
  {
      return (true);
}else{
  return (false);
}    
}
