<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ŀ����ϵͳ</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.tabfont01 {	
	font-family: "����";
	font-size: 9px;
	color: #555555;
	text-decoration: none;
	text-align: center;
}
.font051 {font-family: "����";
	font-size: 12px;
	color: #333333;
	text-decoration: none;
	line-height: 20px;
}
.font201 {font-family: "����";
	font-size: 12px;
	color: #FF0000;
	text-decoration: none;
}
.button {
	font-family: "����";
	font-size: 14px;
	height: 37px;
}
html { overflow-x: auto; overflow-y: auto; border:0;} 
-->
</style>

<link href="../css/css.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<SCRIPT language=JavaScript>
function sousuo(){
	window.open("gaojisousuo.htm","","depended=0,alwaysRaised=1,width=800,height=510,location=0,menubar=0,resizable=0,scrollbars=0,status=0,toolbar=0");
}
function selectAll(){
	var obj = document.fom.elements;
	for (var i=0;i<obj.length;i++){
		if (obj[i].name == "delid"){
			obj[i].checked = true;
		}
	}
}

function unselectAll(){
	var obj = document.fom.elements;
	for (var i=0;i<obj.length;i++){
		if (obj[i].name == "delid"){
			if (obj[i].checked==true) obj[i].checked = false;
			else obj[i].checked = true;
		}
	}
}

function link(){
    document.getElementById("fom").action="kehu.htm";
   document.getElementById("fom").submit();
}

</SCRIPT>

<body>
<form name="fom" id="fom" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background="../images/nav04.gif">
            
		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		    <tr>
			  <td width="24"><img src="../images/ico07.gif" width="20" height="18" /></td>
			  <td width="519"><label>����Ա�˺�����:
			      <input name="text" type="text" nam="gongs" />
			  </label>
			    </input>
			    <input name="Submit" type="button" class="right-button02" value="�� ѯ" /></td>
			   <td width="679" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>	
		    </tr>
          </table></td>
        </tr>
    </table></td></tr>
  <tr>
    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 <tr>
               <td height="20"><span class="newfont07">ѡ��<a href="#" class="right-font08" onclick="selectAll();">ȫѡ</a>-<a href="#" class="right-font08" onclick="unselectAll();">��ѡ</a></span>
		           <input name="Submit" type="button" class="right-button08" value="ɾ����ѡ" /> <input name="Submit" type="button" class="right-button08" value="�����¹���Ա" onclick="link();" />
		           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	              </td>
          </tr>
              <tr>
                <td height="40" class="font42"><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">

					                  <tr>
                    <td height="20" colspan="14" align="center" bgcolor="#EEEEEE"class="tablestyle_title"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����Ա��ϸ�б� &nbsp;</td>
                    </tr>
                  <tr>
				    <td width="8%" align="center" bgcolor="#EEEEEE">ѡ��</td>
					 <td width="12%" height="20" align="center" bgcolor="#EEEEEE">����Ա���ڹ�˾����</td>
                    <td width="7%" align="center" bgcolor="#EEEEEE">����Ա����</td>
                    <td width="10%" align="center" bgcolor="#EEEEEE">����Ա�绰</td>
                    <td width="14%" align="center" bgcolor="#EEEEEE">����Ա�˺�</td>
					<td width="28%" align="center" bgcolor="#EEEEEE">��˾��ϵ��ַ</td>
					<td width="10%" align="center" bgcolor="#EEEEEE">����ʱ��</td>
                    <td width="11%" align="center" bgcolor="#EEEEEE">����</td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">�������Ͻ����г�</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">����</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">�ù�˾�����ڵ������������ó�ף���Ҫ��չ......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">�༭</a>&nbsp;|&nbsp;<a href="kehuminxi.html">�鿴</a></td>
                  </tr>
                  <tr>
				   	<td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">�������Ͻ����г�</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">����</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">�ù�˾�����ڵ������������ó�ף���Ҫ��չ......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">�༭</a>&nbsp;|&nbsp;<a href="kehuminxi.html">�鿴</a></td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">�������Ͻ����г�</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">����</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">�ù�˾�����ڵ������������ó�ף���Ҫ��չ......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">�༭</a>&nbsp;|&nbsp;<a href="kehuminxi.html">�鿴</a></td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">�������Ͻ����г�</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">����</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">�ù�˾�����ڵ������������ó�ף���Ҫ��չ......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">�༭</a>&nbsp;|&nbsp;<a href="kehuminxi.html">�鿴</a></td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">�������Ͻ����г�</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">����</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">�ù�˾�����ڵ������������ó�ף���Ҫ��չ......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">�༭</a>&nbsp;|&nbsp;<a href="kehuminxi.html">�鿴</a></td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">�������Ͻ����г�</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">����</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">�ù�˾�����ڵ������������ó�ף���Ҫ��չ......</td>
                   <td bgcolor="#FFFFFF">2008-08-30</td>
				    <td bgcolor="#FFFFFF"><a href="kehu.htm">�༭</a>&nbsp;|&nbsp;<a href="kehuminxi.html">�鿴</a></td>
                  </tr>
                  <tr>
				   <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">�������Ͻ����г�</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">����</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">�ù�˾�����ڵ������������ó�ף���Ҫ��չ......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">�༭</a>&nbsp;|&nbsp;<a href="kehuminxi.html">�鿴</a></td>
                  </tr>
                  <tr>
				   	<td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">�������Ͻ����г�</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">����</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">�ù�˾�����ڵ������������ó�ף���Ҫ��չ......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">�༭</a>&nbsp;|&nbsp;<a href="kehuminxi.html">�鿴</a></td>
                  </tr>
                  <tr>
				   	<td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">�������Ͻ����г�</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">����</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">�ù�˾�����ڵ������������ó�ף���Ҫ��չ......</td>
					<td bgcolor="#FFFFFF">2008-08-30</td>
                    <td bgcolor="#FFFFFF"><a href="kehu.htm">�༭</a>&nbsp;|&nbsp;<a href="kehuminxi.html">�鿴</a></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6"><img src="../images/spacer.gif" width="1" height="1" /></td>
        </tr>
        <tr>
          <td height="33"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="right-font08">
              <tr>
                <td width="50%">�� <span class="right-text09">5</span> ҳ | �� <span class="right-text09">1</span> ҳ</td>
                <td width="49%" align="right">[<a href="#" class="right-font08">��ҳ</a> | <a href="#" class="right-font08">��һҳ</a> | <a href="#" class="right-font08">��һҳ</a> | <a href="#" class="right-font08">ĩҳ</a>] ת����</td>
                <td width="1%"><table width="20" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="1%"><input name="textfield3" type="text" class="right-textfield03" size="1" /></td>
                      <td width="87%"><input name="Submit23222" type="submit" class="right-button06" value=" " />
                      </td>
                    </tr>
                </table></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</form>
</body>
</html>