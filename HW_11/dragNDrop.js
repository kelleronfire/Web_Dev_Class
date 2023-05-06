function grabber(event) {

   // Set the global variable for the element to be moved
   theElement = event.currentTarget;

   // Determine the position of the word to be grabbed, first removing the units from left and top
   posX = parseInt(theElement.style.left);
   posY = parseInt(theElement.style.top);

   // Compute the difference between where it is and where the mouse click occurred
   diffX = event.clientX - posX;
   diffY = event.clientY - posY;

   // Now register the event handlers for moving and dropping the word
   document.addEventListener("mousemove", mover, true);
   document.addEventListener("mouseup", dropper, true);

}

// The event handler function for moving the word
function mover(event) {
   // Compute the new position, add the units, and move the word
   theElement.style.left = (event.clientX - diffX) + "px";
   theElement.style.top = (event.clientY - diffY) + "px";
}

// The event handler function for dropping the word
function dropper(event) {
   // Unregister the event handlers for mouseup and mousemove
   document.removeEventListener("mouseup", dropper, true);
   document.removeEventListener("mousemove", mover, true);
}

// A function that randomly changes the puzzle set and the arrangement of the images

function shuffle(array) {
  array.sort(() => Math.random() - 0.5);
  return array;
}

function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}

function image_change(){
   // selects which puzzle from 2d array
   let puzzle_number = getRandomInt(3)
   
   // defines the index and shuffles it
   const ordered_indx = [0,1,2,3,4,5,6,7,8,9,10,11];
   let unordered_indx = shuffle(ordered_indx);
   
   
   
   // a 2d array with all of the routes to the three different directories with puzzle pieces.
   const puzzle_routes = [["puzzle1\\img1-1.jpg","puzzle1\\img1-2.jpg","puzzle1\\img1-3.jpg","puzzle1\\img1-4.jpg","puzzle1\\img1-5.jpg","puzzle1\\img1-6.jpg","puzzle1\\img1-7.jpg","puzzle1\\img1-8.jpg","puzzle1\\img1-9.jpg","puzzle1\\img1-10.jpg","puzzle1\\img1-11.jpg","puzzle1\\img1-12.jpg"],
   ["puzzle2\\img2-1.jpg","puzzle2\\img2-2.jpg","puzzle2\\img2-3.jpg","puzzle2\\img2-4.jpg","puzzle2\\img2-5.jpg","puzzle2\\img2-6.jpg","puzzle2\\img2-7.jpg","puzzle2\\img2-8.jpg","puzzle2\\img2-9.jpg","puzzle2\\img2-10.jpg","puzzle2\\img2-11.jpg","puzzle2\\img2-12.jpg"],
   ["puzzle3\\img3-1.jpg","puzzle3\\img3-2.jpg","puzzle3\\img3-3.jpg","puzzle3\\img3-4.jpg","puzzle3\\img3-5.jpg","puzzle3\\img3-6.jpg","puzzle3\\img3-7.jpg","puzzle3\\img3-8.jpg","puzzle3\\img3-9.jpg","puzzle3\\img3-10.jpg","puzzle3\\img3-11.jpg","puzzle3\\img3-12.jpg"]]
   //now we just need to figure out how to randomly place each tag of an array in one of the 12 img spots.
   // generate an array of numbers 1-12 in a random order and use it randomly access each of the 12 images.  
   // each of the img tags access the same spot on the random array to access its index to accsess which puzzle piece it needs.  
   	
    const element1 = document.getElementById("img1");
	element1.src = puzzle_routes[puzzle_number][ordered_indx[0]];
	
	const element2 = document.getElementById("img2");
	element2.src = puzzle_routes[puzzle_number][ordered_indx[1]];
	
	const element3 = document.getElementById("img3");
	element3.src = puzzle_routes[puzzle_number][ordered_indx[2]];
	
	const element4 = document.getElementById("img4");
	element4.src = puzzle_routes[puzzle_number][ordered_indx[3]];
	
	const element5 = document.getElementById("img5");
	element5.src = puzzle_routes[puzzle_number][ordered_indx[4]];
	
	const element6 = document.getElementById("img6");
	element6.src = puzzle_routes[puzzle_number][ordered_indx[5]];
	
	const element7 = document.getElementById("img7");
	element7.src = puzzle_routes[puzzle_number][ordered_indx[6]];
	
	const element8 = document.getElementById("img8");
	element8.src = puzzle_routes[puzzle_number][ordered_indx[7]];
	
	const element9 = document.getElementById("img9");
	element9.src = puzzle_routes[puzzle_number][ordered_indx[8]];
	
	const element10 = document.getElementById("img10");
	element10.src = puzzle_routes[puzzle_number][ordered_indx[9]];
	
	const element11 = document.getElementById("img11");
	element11.src = puzzle_routes[puzzle_number][ordered_indx[10]];
	
	const element12 = document.getElementById("img12");
	element12.src = puzzle_routes[puzzle_number][ordered_indx[11]];
}