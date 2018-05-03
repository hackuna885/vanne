function btnFormAjax(e){
			tecla = (document.all) ? e.keyCode : e.which;
		    if (tecla == 13){
		        formAjax2();
		    }
		}

		function formAjax2(){

			var conexion;
			var nom = document.getElementById("txtCorreo").value;
			var valores = "txtCorreo="+nom;

			if (window.XMLHttpRequest) {
				conexion = new XMLHttpRequest();
			}else{
				conexion = new ActiveXObject("Microsoft.XMLHTTP");
			}

			conexion.onreadystatechange=function(){
				if (conexion.readyState==4 && conexion.status==200) {
					document.getElementById("midiv").innerHTML=conexion.responseText;
				}
			}

		

			conexion.open("POST","valida/valida1.php",true);
			conexion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			conexion.send(valores);
		}

		function btnFormAjax2(e){
			tecla = (document.all) ? e.keyCode : e.which;
		    if (tecla == 13){
		        formAjax3();
		    }
		}


		function formAjax3(){

			var conexion;
			var nom = document.getElementById("txtPassword").value;
			var valores = "txtPassword="+nom;

			if (window.XMLHttpRequest) {
				conexion = new XMLHttpRequest();
			}else{
				conexion = new ActiveXObject("Microsoft.XMLHTTP");
			}

			conexion.onreadystatechange=function(){
				if (conexion.readyState==4 && conexion.status==200) {
					document.getElementById("midiv").innerHTML=conexion.responseText;
				}
			}

		

			conexion.open("POST","valida/valida2.php",true);
			conexion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			conexion.send(valores);
		}