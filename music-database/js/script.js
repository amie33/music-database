/*This is my javascript for the musicians page of my musicdatabase project.  I had to move my javascript to the bottom of my html document*/

//starting point 
	var startPic = 0;
//call the function 
	flipPic();

//create the function the is able to produce a slideshow of album covers 
	function flipPic()
	{
	//create a variable that allows you to store and pull your images 
	  var get = document.getElementsByClassName("images");
	//for loop if i is less than they length of the get array don't display
	  for (i = 0; i < get.length; i++) {
		get[i].style.display = "none";
	  }
	  startPic++;//increment your starting image index by one 
	  //if the starting pic is greater than the length of the array start at 1 
	  if (startPic > get.length) 
	  {
		  startPic = 1;
	  }
	  get[startPic-1].style.display = "block";//loop through the pictures 
	  setTimeout(flipPic, 3000);//dispaly every 3000 miliseconds 
	}
 