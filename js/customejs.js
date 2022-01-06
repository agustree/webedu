
var app = angular.module('myApp2', []);
app.controller('myCtrl2', function($scope,$http) {
	   $scope.listProducts = [
			//   day1:'senin', wkt1:07, mpelnya:'matematika'},
			//{ day1:'rabu', wkt1:08, mpelnya:'Fisika'},		
		];

			$scope.addaa = function(){
           var hours = $("#timepicker").find("input").val();
           var hours2 = $("#timepicker2").find("input").val();
           var wktubimbel=hours+' - '+hours2;
           if 
			$scope.listProducts.push({
				 day1:$scope.hari, wkt1:wktubimbel , mpelnya:$scope.mpelnya
			});
			/*$scope.id='';
			$scope.name='';
			$scope.price='';
			$scope.quantity='';*/
		};

    $scope.showMe = false;
    $scope.myFunc = function() {
        $scope.showMe = true;
    };
    $scope.myFuncprivat = function() {
        $scope.showMe = false;
    };

    $scope.submitkan=function(){
       $http({
       	  method:'POST',
       	  URL:'tes.php',
       	  data:$scope.listProducts,
       	  headers: {
    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
  }
       }).success(function(data){
       	$scope.content=data;
       });
    }

	$scope.del = function(id){
			/*var result = confirm('Are you sure');
			if(result===true){
			var index = getSelectedIndex(id);
			$scope.listProducts.splice(index, 1);

			}*/

			var index = getSelectedIndex(id);
			$scope.listProducts.splice(index, 1);
		};

		function getSelectedIndex(id) {
			for(var i=0; i<$scope.listProducts.length; i++)
				if($scope.listProducts[i].id==id)
					return i;
				return -1;
		}

    

});


		  $('#timepicker').datetimepicker({
      format: 'LT',
      stepping:60
    })

		  $('#timepicker2').datetimepicker({
      format: 'LT',
      stepping:60
    })

		var appang = angular.module('myApp', []);
				appang.controller('myCtrl', function($scope) {
		    $scope.listProducts = [
			{ day1:'senin', wkt1:07, mpelnya:'matematika'},
			{ day1:'rabu', wkt1:08, mpelnya:'Fisika'},		
		];

		$scope.add = function(){

  // your code

var hours = $scope.wkt1.getHours()+':'+$scope.wkt1.getMinutes();
			$scope.listProducts.push({
				 day1:$scope.day1, wkt1:hours, mpelnya:$scope.mpelnya
			});
			/*$scope.id='';
			$scope.name='';
			$scope.price='';
			$scope.quantity='';*/
		};


		$scope.del = function(id){
			/*var result = confirm('Are you sure');
			if(result===true){
			var index = getSelectedIndex(id);
			$scope.listProducts.splice(index, 1);

			}*/

			var index = getSelectedIndex(id);
			$scope.listProducts.splice(index, 1);
		};

		function getSelectedIndex(id) {
			for(var i=0; i<$scope.listProducts.length; i++)
				if($scope.listProducts[i].id==id)
					return i;
				return -1;
		}
		});



 /////////////////////pure javascript///////////////////////////////////////////
		function myFunction() {
		  var selectted = document.getElementById("inputJenjang").value;
		  
		  var dsSMA = document.getElementById("tingkatSMA");
		  var dsSD = document.getElementById("tingkatsD");
		  var jurSMA = document.getElementById("program");
		/* if (checkBox.checked == true){
		    text.style.display = "block";
		  } else {
		     text.style.display = "none";
		  }*/
		  if (selectted == 'SMA') {
		  	dsSMA.style.display = "block";
		  	 dsSD.style.display = "none";
		  	 jurSMA.style.display = "block";
		  }else if(selectted == 'SD'){
		  	 dsSD.style.display = "block";
		  	 dsSMA.style.display = "none";
		  	 jurSMA.style.display = "none";
		  }else if(selectted == 'SMP'){
		  	 dsSD.style.display = "none";
		  	 dsSMA.style.display = "block";
		  	 jurSMA.style.display = "none";
		  }/*else if(selectted == 'SD'){
		  	 text.style.display = "none";
		  }else{

		  }*/
		  
		}

		function paket(paketan){
			var tabprivat = document.getElementById("privat");
			var tabkelompok = document.getElementById("kelompok");

			if (paketan=='priv') {
				tabprivat.style.display='block';
				tabkelompok.style.display='none';
			}else if (paketan=='kelom') {
					tabprivat.style.display='none';
				tabkelompok.style.display='block';
			}
		}

		function funcklompok(klom){
				var divisi2 = document.getElementById("div2org");
			var divisi3 = document.getElementById("div3org");
			if (klom=='2org') {
				divisi2.style.display='block';
				divisi3.style.display='none';

			}else if (klom=='3org') {
				divisi2.style.display='block';
				divisi3.style.display='block';
			}
		}

        

        var hart='';
        var nom=0;
        	//var harifix= document.getElementById("haripilihan").value;
		function pilihwaktu(hari){		
			//var harinet = document.getElementById("hariles").value;
			//var harinet2 = document.getElementById("haripilihan").value;
			nom=nom+1;
			if (nom==1) {
              document.getElementById("haripilihan").value=hari;
			}else{
			  hart=document.getElementById("haripilihan").value +','+ hari;
			  document.getElementById("haripilihan").value=hart;

			}
			
			
		
			
		}


		$(document).ready(function () {
	document.getElementById('Ortunama').readOnly = true;
	//document.getElementById('jamawalbimbel').readOnly = true;
	//document.getElementById('jamaakhirbimbel').readOnly = true;

  /*$("form").submit(function (event) {
    var formData = {
      name: $("#nama").val(),
    //  email: $("#email").val(),
     // superheroAlias: $("#superheroAlias").val(),
    };

    $.ajax({
      type: "POST",
      url: "proses.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      //console.log(data);
        
            if (!data.success) {
            
            }else{
            	var stts = document.getElementById("status");
            stts.style.display = "block";
           
            }
  
    });

    event.preventDefault();
  });

  	$().ajaxStart(function() {
	//	$('#loading').show();
		$('#result').hide();
	}).ajaxStop(function() {
		//$('#loading').hide();
		$('#result').fadeIn('slow');
	});

  $('#myForm').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				$('#result').html(data);
			}
		})
		return false;
	});*/
    
   document.getElementById("myForm").reset();
  $("#myForm").submit(function(e) {
          e.preventDefault();

        /*  $.ajax({
              url: 'proses.php',
              type: 'post',
              data: $(this).serialize(),             
              success: function(data) {               
              document.getElementById("myForm").reset();
              $('#result').html(data); 

              }
          });*/
          $.ajax({
            url: 'proses.php',
             type: 'post',
         data: JSON.stringify( { "name": $('#namanya').val(), 
         	"gen": $('#gend').val(),"tes": [
      "Radiation resistance",
      "Turning tiny",
      "Radiation blast"
    ] } ),   
         success:callback   
            
          });


      });

});

		function callback(data,status){
			$("#result").text(data);

		}
		