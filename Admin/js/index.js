	$(document).ready(function() {
	
	$('#title,#body').keyup(function(){
		var t=$('#title').val();
		var b=$('#body').val();
		$('#pt').html(t);
		$('#pb').html(b);
	});//privew

	// $('#signup').click(function(){
	// 	var uname=$('#uname').val();
	// 	var email=$('#email').val();
	// 	var phone=$('#phone').val();
	// 	var password=$('#password').val();
	
	// 	signup(uname,email,phone,password);
	// }); //signup click

	// function signup(uname,email,phone,password){

	// 	$.ajax({
	// 		cache:false,
	// 		url:"rest/registration.php?uname="+uname+"email="+email+"phone="+phone+"password="+password,
	// 		error:function(){
	// 			alert("Server error");
	// 		},
	// 		success:function(result){
	// 				alert(result);
	// 		}
	// 	});


	// }
	// $('#addpost').click(function(){
	// 	var title=$('#title').val();
	// 	var body=$('#body').val();
		
	// 	post(title,body);
	// });
	// function post(title,body) {
	// 	$.ajax({
	// 		cache:false,
	// 		url:"rest/post.php?title="+title+"&body"=+body,
	// 		error:function(){
	// 			alert("Server error");
	// 		},
	// 		success:function(result){
	// 		if(result=="0"){
	// 			alert("content psoted");

	// 		}
	// 		}
	// 	});
	// }




});//ready method