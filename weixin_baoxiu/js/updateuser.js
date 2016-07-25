
function form_Validator(theForm)
{
  //=============================判断学号输入是否正确====================================================
  if (theForm.sn.value == "")
  {
    alert("请输入你的学号");
    theForm.sn.focus();
    return (false);
  }
  if (theForm.sn.value.length < 5)
  {
    alert("学号长度至少为5位");
    theForm.sn.focus();
    return (false);
  }
  var checkOK = "0123456789p";
  var checkStr = theForm.sn.value;
  var allValid = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch != ",")
      allNum += ch;
  }
  if (!allValid)
  {
    alert("请输入正确的学号");
    theForm.sn.focus();
    return (false);
  }
  if (decPoints > 1)
  {
    alert("请在学生一栏中输入一个有效数字。");
    theForm.sn.focus();
    return (false);
  }
//==================================判断密码是否输入正确================================================
  if (theForm.password.value == "")
  {
    alert("请输入密码");
    theForm.password.focus();
    return (false);
  } 
  if (theForm.weixinhao.value == "")
  {
    alert("请输入微信id或昵称");
    theForm.weixinhao.focus();
    return (false);
  }
  if (theForm.name.value == "")
  {
    alert("请输入你的姓名");
    theForm.name.focus();
    return (false);
  }
    if (theForm.name.value.length > 15)
  {
    alert("中国好像还没有想您一样这么长的姓名吧");
    theForm.sn.focus();
    return (false);
  }
  if (theForm.Snumber.value == "")
  {
    alert("请输入你的短号");
    theForm.Snumber.focus();
    return (false);
  }

  if (theForm.Snumber.value.length < 3)
  {
    alert("短号长度至少为3位");
    theForm.Snumber.focus();
    return (false);
  }

  if (theForm.Snumber.value.length > 11)
  {
    alert("短号长度至多为11位");
    theForm.Snumber.focus();
    return (false);
  }

  var checkOK = "0123456789-.,";
  var checkStr = theForm.Snumber.value;
  var allValid = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch != ",")
      allNum += ch;
  }
  if (!allValid)
  {
    alert("请输入正确的短号");
    theForm.Snumber.focus();
    return (false);
  }
//=========================================选择宿舍号================================================
  if (theForm.hostel.value == "")
  {
    alert("请输入你的住址及床位，例如：H12-303");
    theForm.hostel.focus();
    return (false);
  }

  if (theForm.hostel.value.length < 3)
  {
    alert("请填入正确的住址");
    theForm.hostel.focus();
    return (false);
  }


  var checkOK = "0123456789AaBbCcDdHhYyLl-——,，";
  var checkStr = theForm.hostel.value;
  var allValid = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch != ",")
      allNum += ch;
  }
  if (!allValid)
  {
    alert("请填入正确的住址");
    theForm.hostel.focus();
    return (false);
  }

  if (confirm("你确定要提交信息吗？"))
  {
      return (true);
}else{
  return (false);
}

}