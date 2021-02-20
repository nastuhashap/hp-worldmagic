		//Функция показа
			function show(state){

					document.getElementById('window').style.display = state;			
					document.getElementById('wrap').style.display = state; 			
			}
			
			
			function show1(state){

					document.getElementById('wi').style.display = state;			
					document.getElementById('wrap').style.display = state; 			
			}

			
			
			function show2(state){

					document.getElementById('win').style.display = state;			
					document.getElementById('wrap').style.display = state; 			
			}

			
			function show3(state){

					document.getElementById('wndo').style.display = state;			
					document.getElementById('wrap').style.display = state; 			
			}





function prov()
{
var sum = 0;
if (document.form1.elements[0].checked) sum=sum+1;
if (document.form1.elements[1].checked) sum=sum+2;
if (document.form1.elements[2].checked) sum=sum+3;
if (document.form1.elements[3].checked) sum=sum+4;
if (document.form1.elements[4].checked) sum=sum+1;
if (document.form1.elements[5].checked) sum=sum+2;
if (document.form1.elements[6].checked) sum=sum+3;
if (document.form1.elements[7].checked) sum=sum+4;
if (document.form1.elements[8].checked) sum=sum+1;
if (document.form1.elements[9].checked) sum=sum+2;
if (document.form1.elements[10].checked) sum=sum+3;
if (document.form1.elements[11].checked) sum=sum+4;
if (document.form1.elements[12].checked) sum=sum+1;
if (document.form1.elements[13].checked) sum=sum+2;
if (document.form1.elements[14].checked) sum=sum+3;
if (document.form1.elements[15].checked) sum=sum+4;
if (document.form1.elements[16].checked) sum=sum+1;
if (document.form1.elements[17].checked) sum=sum+2;
if (document.form1.elements[18].checked) sum=sum+3;
if (document.form1.elements[19].checked) sum=sum+4;

if (sum == 0 ){ confirm("Ответь честно на все вопросы и получишь честный ответ!");}
if (sum > 0 && sum <= 10 ){ show("block") }
if (sum > 11 && sum <= 20 ){ show1("block")}
if (sum > 21 && sum <= 35 ){ show2("block")}
if (sum > 36 && sum <= 50 ){ show3("block")}
sum=0;
};