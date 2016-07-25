
jQuery(document).ready(function() {

    /*
        Background slideshow
    */
    $.backstretch([
      "http://uguesses-images.stor.sinaapp.com/nf1.jpg"
    , "http://nfwxbx-images.stor.sinaapp.com/bjxu1.jpg"
    , "http://nfwxbx-images.stor.sinaapp.com/nf3.jpg"
    , "http://nfwxbx-images.stor.sinaapp.com/bjxu2.jpg"
    ], {duration: 3000, fade: 750});


    /*
        Form validation
    */
    $('.register form').submit(function(){
        $(this).find("label[for='sn']").html('学号');
        $(this).find("label[for='password']").html('密码');
        $(this).find("label[for='password2']").html('确认密码');
        $(this).find("label[for='name']").html('姓名');
        $(this).find("label[for='Lnumber']").html('手机长号');
        $(this).find("label[for='Snumber']").html('手机短号');
        $(this).find("label[for='hostel']").html('宿舍号');
        ////
        var sn = $(this).find('input#sn').val();
        var password = $(this).find('input#password').val();
        var password2 = $(this).find('input#password2').val();
        var name = $(this).find('input#name').val();
        var Lnumber = $(this).find('input#Lnumber').val();
        var Snumber = $(this).find('input#Snumber').val();
        var hostel = $(this).find('input#hostel').val();
        if(sn == '') {
            $(this).find("label[for='sn']").append("<span style='display:none' class='red'> - 请输入你的学号</span>");
            $(this).find("label[for='sn'] span").fadeIn('medium');
            $(this).find("label[for='sn']").focus();
            return false;
        }
          if (sn.length < 5) {
            $(this).find("label[for='sn']").append("<span style='display:none' class='red'> - 学号长度至少为5位</span>");
            $(this).find("label[for='sn'] span").fadeIn('medium');
            $(this).find("label[for='sn']").focus();
            return false;
          }
          var checkOK = "0123456789p";
          var checkStr = sn;
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
            $(this).find("label[for='sn']").append("<span style='display:none' class='red'> - 请输入正确的学号</span>");
            $(this).find("label[for='sn'] span").fadeIn('medium');
            $(this).find("label[for='sn']").focus();
            return false;
          }
          if (decPoints > 1)
          {
            $(this).find("label[for='sn']").append("<span style='display:none' class='red'> - 请在学号一栏中输入一个有效数字。</span>");
            $(this).find("label[for='sn'] span").fadeIn('medium');
            $(this).find("label[for='sn']").focus();
            return false;
          }

        if(password == '') {
            $(this).find("label[for='password']").append("<span style='display:none' class='red'> - 请输入登录密码</span>");
            $(this).find("label[for='password'] span").fadeIn('medium');
            $(this).find("label[for='password']").focus();
            return false;
        }
        if(password2 == '') {
            $(this).find("label[for='password2']").append("<span style='display:none' class='red'> - 请再次输入密码</span>");
            $(this).find("label[for='password2'] span").fadeIn('medium');
            $(this).find("label[for='password2']").focus();
            return false;
        }
        if(password2 != password) {
            $(this).find("label[for='password2']").append("<span style='display:none' class='red'> - 两次密码不相同</span>");
            $(this).find("label[for='password2'] span").fadeIn('medium');
            $(this).find("label[for='password2']").focus();
            return false;
        }
        if(name == '') {
            $(this).find("label[for='name']").append("<span style='display:none' class='red'> - 请输入你的姓名</span>");
            $(this).find("label[for='name'] span").fadeIn('medium');
            $(this).find("label[for='name']").focus();
            return false;
        }
        if(Lnumber == '') {
            $(this).find("label[for='Lnumber']").append("<span style='display:none' class='red'> - 请输入你的手机长号</span>");
            $(this).find("label[for='Lnumber'] span").fadeIn('medium');
            $(this).find("label[for='Lnumber']").focus();
            return false;
        }

              if (Lnumber.length < 10)
              {
                 $(this).find("label[for='Lnumber']").append("<span style='display:none' class='red'> - 请输入正确的手机长号</span>");
                 $(this).find("label[for='Lnumber'] span").fadeIn('medium');
                 $(this).find("label[for='Lnumber']").focus();
                 return false;
              }

              var checkOK = "0123456789-.,";
              var checkStr = Lnumber;
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
                $(this).find("label[for='Lnumber']").append("<span style='display:none' class='red'> - 请输入正确的手机长号</span>");
                 $(this).find("label[for='Lnumber'] span").fadeIn('medium');
                 $(this).find("label[for='Lnumber']").focus();
                 return false;
              }
        if(Snumber == '') {
            $(this).find("label[for='Snumber']").append("<span style='display:none' class='red'> - 请输入你的手机短号</span>");
            $(this).find("label[for='Snumber'] span").fadeIn('medium');
            $(this).find("label[for='Snumber']").focus();
            return false;
        }
                  if (Snumber.length < 3)
                  {
                    $(this).find("label[for='Snumber']").append("<span style='display:none' class='red'> - 短号长度至少为3位</span>");
            $(this).find("label[for='Snumber'] span").fadeIn('medium');
            $(this).find("label[for='Snumber']").focus();
            return false;
                  }
                  if (Snumber.length > 11)
                  {
                     $(this).find("label[for='Snumber']").append("<span style='display:none' class='red'> - 短号长度至多为11位</span>");
            $(this).find("label[for='Snumber'] span").fadeIn('medium');
            $(this).find("label[for='Snumber']").focus();
            return false;
                  }

                  var checkOK = "0123456789-.,";
                  var checkStr = Snumber;
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
                    $(this).find("label[for='Snumber']").append("<span style='display:none' class='red'> - 请输入正确的短号</span>");
            $(this).find("label[for='Snumber'] span").fadeIn('medium');
            $(this).find("label[for='Snumber']").focus();
            return false;
                  }
        if(hostel == '') {
            $(this).find("label[for='hostel']").append("<span style='display:none' class='red'> - 输入住址：例如:H12-303</span>");
            $(this).find("label[for='hostel'] span").fadeIn('medium');
            $(this).find("label[for='hostel']").focus();
            return false;
        }

                      if (hostel.length < 4)
                      {
                         $(this).find("label[for='hostel']").append("<span style='display:none' class='red'> - 请输入正确的住址</span>");
            $(this).find("label[for='hostel'] span").fadeIn('medium');
            $(this).find("label[for='hostel']").focus();
            return false;
                      }


                      var checkOK = "0123456789AaBbCcDdHhYyLl-——,，";
                      var checkStr = hostel;
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
                         $(this).find("label[for='hostel']").append("<span style='display:none' class='red'> - 请输入正确的住址</span>");
            $(this).find("label[for='hostel'] span").fadeIn('medium');
            $(this).find("label[for='hostel']").focus();
            return false;
                      }
    });


});


