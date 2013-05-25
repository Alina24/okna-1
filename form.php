<html>
<head>
<title>Вікна</title>
</head>
<script language="javascript">
function getValue(SomeSelect) {
  SomeSel_Obj = document.forms["SForm"].elements[SomeSelect].options;
  SomeSel_Val = SomeSel_Obj[SomeSel_Obj.selectedIndex].value;
  if(SomeSel_Val) { return SomeSel_Val; } else { return null; }
}
function calculate()
{
  var WSquare, LSquare, CSquare, RSquare, ActualSquare, AddCooficient, WTypeSum, AddSum;
  var Val_a, Val_b, Val_c,  ImpOrPritv, WMaterial, WColor, MosquitoL, MosquitoR, Mounting;
  Val_a = parseInt(document.forms["SForm"].elements["val_a"].value,0);
  Val_b = parseInt(document.forms["SForm"].elements["val_b"].value,0);
  Val_c = parseInt(document.forms["SForm"].elements["val_c"].value,0);
  WMaterial = parseInt(getValue('WMaterial'),0);
  WColor = parseInt(getValue('WColor'),0);
  if(document.forms["SForm"].elements["MosquitoL"].checked) MosquitoL = true; else MosquitoL = false;
  if(document.forms["SForm"].elements["MosquitoR"].checked) MosquitoR = true; else MosquitoR = false;
  if(document.forms["SForm"].elements["Mounting"].checked) Mounting = true; else Mounting = false;

  var WndWoodM2_Coof = 0.12;
  var WndWoodM3_Coof = 0.13;
  var WndWoodM4_Coof = 0.13;
  var WndWoodM5_Coof = 0.21;
  var WndWoodM6_Coof = 0.4;
  var WndWoodM7_Coof = 0.8;
  var WndWoodM8_Coof = 0.10;
  var WndColorC2_CPS = 12;
  var WndColorC3_CPS = 12;
  var Mosquete_CPS = 30;
  var Mounting_CPS = 435;
 
  LSquare = (Val_a * Val_b)/1000000;
  RSquare = (Val_a * Val_c)/1000000;
  ActualSquare = LSquare + RSquare;
  WTypeSum = 0; AddSum = 0; AddCooficient = 1;
 
  if(WMaterial==2) AddCooficient = AddCooficient + WndWoodM2_Coof;
  if(WMaterial==3) AddCooficient = AddCooficient + WndWoodM3_Coof;
  if(WMaterial==4) AddCooficient = AddCooficient + WndWoodM4_Coof;
  if(WMaterial==5) AddCooficient = AddCooficient + WndWoodM5_Coof;
  if(WMaterial==6) AddCooficient = AddCooficient + WndWoodM6_Coof;
  if(WMaterial==7) AddCooficient = AddCooficient + WndWoodM7_Coof;
  if(WMaterial==8) AddCooficient = AddCooficient + WndWoodM8_Coof;

  if(WColor==2) AddSum = AddSum + (ActualSquare * WndColorC2_CPS);
  
  ML_Square = LSquare; if(ML_Square < 1) ML_Square = 1;
  MR_Square = RSquare; if(MR_Square < 1) MR_Square = 1;
  if(MosquitoL==true) AddSum = AddSum + (ML_Square * Mosquete_CPS) + 5;
  if(MosquitoR==true) AddSum = AddSum + (MR_Square * Mosquete_CPS) + 5;

  if(Mounting==true) AddSum = AddSum + (ActualSquare * Mounting_CPS);

  WTypeSum = WTypeSum * AddCooficient;
   csum.innerText=Math.round(WTypeSum + AddSum)+1;
   csss.innerText=(Math.round((ActualSquare)*100))/100;
}
</script>

<table width="78%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="779" valign="top"> 
      <center>
        <center>
         
<form name=SForm action="1.php">
  &nbsp;<font color="#FF0000">&nbsp;&nbsp;<span lang="ru"><b>Вікна калькулятор </b></span></font><b><font color="#FF0000">:</font></b><br>
<br>
<table border=0 cellspacing=0 cellpadding=5 width=500>
<tr> 
<td width="255" valign="top"><b>Висота вікна[A]:</b></td>
 <td width="255"> 
<input type="text" name="val_a" size="10">
&nbsp;мм<br>
 </td>
   </tr>
<tr> 
<td width="255" valign="top"><b>Ширина лівої створки[B]: </b></td>
<td width="255"> 
<input type="text" name="val_b" size="10">
&nbsp;мм<br>
 </td>
</tr>
<tr> 
<td colspan="2" width="255" valign="top"> 
              </tr>
              <tr> 
                <td width="255" valign="top"><b>Ширина правої створки[C]:</b></td>
                <td width="255"> 
                  <input type="text" name="val_c" size="10">
                  &nbsp;мм<br>
                </td>
              </tr>
              <tr> 
                <td colspan="2" width="255" valign="top"> 
<input type="checkbox" name="MosquitoR" value="True">
<b>Москітна сітка</b></td>
 </tr>
<tr> 
 <td width="255" valign="middle"><b>Матеріал: </b></td>
<td width="255"> 
<select name="WMaterial">
<option value="1">1 - Сосна</option>
<option value="2">2 - Горіх</option>
<option value="3">3 - Дуб</option>
                  </select>
                </td>
              </tr>
              <tr> 
                <td width="255" valign="middle"><b>Цвет: </b></td>
<td width="255"> 
<select name="WColor">
 <option value="1">1 - Білий або коричневий *</option>
<option value="2">2 - Двохкольорове окрашення</option>
</select>
                </td>
              </tr>
              <tr> 
                <td colspan="2" valign="middle">&nbsp;</td>
              </tr>
              <tr> 
                <td valign="middle" colspan="2"> 
                  <table width="365" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="24"> 
                      </td>
     
                    </tr>
                  </table>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <center>
                    <p> 
<input type="button" value="Порахувати" onClick="calculate()" name="CaclButton">
 </p>
</center>
</td>
 </tr>
 <tr> 
<td colspan="2"> 
<center>
<p> 
 <input type="button" value="Заказати" onClick="zakaz()" name="ZakazButton">
                    </p>
                  </center>
                </td>
              </tr>
            </table>
          </form>
          <table border=0 cellspacing=0 cellpadding=5 width=400>
            <tr> 
              <td width="335"><b>Ціна заказаного вікна:</b></td>
              <td width="100"><b><font color=red><span id="csum">0</span> грн.</font></b></td>
            </tr>
            <tr> 
              <td width="3см"><b>Площа заказанного вікна:</b></td>
              <td width="100"><b><font color=red><span id="csss">0</span>&nbsp;кв.м.</font></b></td>
          </table>
          <div align="center"></div>
          <p>&nbsp;</p>
          <h1 class="b">&nbsp;</h1>
          </center>
        </center>
      </td>
  </tr>
</table>
    </td>
  </tr>
</table>
</body>
</html>
