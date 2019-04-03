<%@LANGUAGE="JAVASCRIPT" CODEPAGE="1252"%>
<%
	//// Última revisión: 14/07/14
	
	//// Se toman los datos de la ubicación actual:
	var ip_servidor = new String(Request.ServerVariables("LOCAL_ADDR"));
	var ip_servidor_correo = new String("64.76.23.44");
	var ruta_actual = new String(Server.MapPath("."));
	//// Se quita de la ruta la carpeta pública:
	ruta_actual = ruta_actual.substring(0, ruta_actual.lastIndexOf("\\"));
	//// Se toma de la ruta el dominio:
	var dominio = new String(ruta_actual.substring(ruta_actual.lastIndexOf("\\") + 1));
	//// Se toma de la ruta las carpetas que corresponden a/los usuarios del sitio:
	ruta_actual = ruta_actual.substring(ruta_actual.indexOf("\\", ruta_actual.indexOf(":") + 2) + 1, ruta_actual.lastIndexOf("\\"));
	
	//// Se crean las carpetas de acceso a los servicios:
	var fso = Server.CreateObject("Scripting.FileSystemObject");
	
	//// Se verifica si existe la carpeta de acceso al webmail.
	if (!fso.FolderExists(Server.MapPath(".") +"\\mail")){
		fso.CreateFolder(Server.MapPath(".") +"\\mail");
		}
	//// Se crea el archivo de redirección al webmail:
	var archivo = fso.OpenTextFile(Server.MapPath(".") +"\\mail\\index.htm", 2, true, 0);
	//// Se ecribe el código en el archivo.
	archivo.WriteLine("<html>");
	archivo.WriteLine("<head>");
	archivo.WriteLine("<title>Cargando...</title>");
	archivo.WriteLine("<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>");
	archivo.WriteLine("</head>");
	archivo.WriteLine("<body onLoad='document.formulario.submit()'>");
	
	archivo.WriteLine("<form name='formulario' method='post' action='http://"+ ip_servidor_correo +"/mail/'>");
	archivo.WriteLine("<input type='hidden' name='dominio' id='dominio' value='"+ dominio +"'>");
	archivo.WriteLine("<input type='hidden' name='ruta' id='ruta' value='"+ ruta_actual +"'>");
	archivo.WriteLine("</form>");
	
	archivo.WriteLine("</body>");
	archivo.WriteLine("</html>");
	archivo.Close();
	
	
	//// Se verifica si existe la carpeta de acceso al administrador del webmail.
	if (!fso.FolderExists(Server.MapPath(".") +"\\mailadmin")){
		fso.CreateFolder(Server.MapPath(".") +"\\mailadmin");
		}
	//// Se crea el archivo de redirección al webmail:
	var archivo = fso.OpenTextFile(Server.MapPath(".") +"\\mailadmin\\index.htm", 2, true, 0);
	//// Se ecribe el código en el archivo.
	archivo.WriteLine("<html>");
	archivo.WriteLine("<head>");
	archivo.WriteLine("<title>Cargando...</title>");
	archivo.WriteLine("<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>");
	archivo.WriteLine("</head>");
	archivo.WriteLine("<body onLoad='document.formulario.submit()'>");
	
	archivo.WriteLine("<form name='formulario' method='post' action='http://"+ ip_servidor_correo +"/meadmin/'>");
	archivo.WriteLine("<input type='hidden' name='dominio' id='dominio' value='"+ dominio +"'>");
	archivo.WriteLine("<input type='hidden' name='ruta' id='ruta' value='"+ ruta_actual +"'>");
	archivo.WriteLine("</form>");
	
	archivo.WriteLine("</body>");
	archivo.WriteLine("</html>");
	archivo.Close();
	
	
	//// Se verifica si existe la carpeta de acceso a los reportes.
	if (!fso.FolderExists(Server.MapPath(".") +"\\reportes")){
		fso.CreateFolder(Server.MapPath(".") +"\\reportes");
		}
	//// Se crea el archivo de redirección al webmail:
	var archivo = fso.OpenTextFile(Server.MapPath(".") +"\\reportes\\index.htm", 2, true, 0);
	//// Se ecribe el código en el archivo.
	archivo.WriteLine("<html>");
	archivo.WriteLine("<head>");
	archivo.WriteLine("<title>Cargando...</title>");
	archivo.WriteLine("<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>");
	archivo.WriteLine("</head>");
	archivo.WriteLine("<body onLoad='document.formulario.submit()'>");
	
	archivo.WriteLine("<form name='formulario' method='post' action='http://"+ ip_servidor +"/reportes/'>");
	archivo.WriteLine("<input type='hidden' name='dominio' id='dominio' value='"+ dominio +"'>");
	archivo.WriteLine("<input type='hidden' name='ruta' id='ruta' value='"+ ruta_actual +"'>");
	archivo.WriteLine("</form>");
	
	archivo.WriteLine("</body>");
	archivo.WriteLine("</html>");
	archivo.Close();

%>	


<html>
<head>
<title>Cargando...</title>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
</head>
<body onLoad="document.location='/'">
</body>
</html>


