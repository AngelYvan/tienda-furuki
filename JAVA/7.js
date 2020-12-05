var items = document.querySelectorAll('.item');
var previous = document.querySelector('input.previous');
var next = document.querySelector('input.next');

/* 
    We will just keep swaping the classes between the elements.
*/

//The starting order.
var order = [1,2,3,4,5,6];

//A helper function, that will swap the order array in given direction specified by the dir value.
function reOrder(arr,dir){

    var dir = Number(dir);

    //make a copy
    var t = arr.slice();

    //Imagine that our order array at a given moment is sorted like [1,2,3,4,5,6]


    //if dir === 1
    //it will be sorted like [2,3,4,5,6,1] "NOTICE the 1"
    if(dir === 1){
        var ele = t.shift();
        t.push(ele);
    }


    //if dir === -1
    //it will be sorted like [6,1,2,3,4,5] "NOTICE the 6"
    if(dir === -1){
        var ele = t.pop();
        t.unshift(ele);
    }
    return t;
}

//////////////////////////////////////
//////////////////////////////////////
//////////////////////////////////////
//////////////////////////////////////
//////// 					    //////
///////  Async Await approach  ///////
//////  					  ////////
//////////////////////////////////////
//////////////////////////////////////
//////////////////////////////////////
//////////////////////////////////////


/*var events = [];
//The function that will do the animation
function animate(dir){
	return new Promise(function(res,rej){
		//get the new order depending on the given direction.
	    var newOrder = reOrder(order,dir);

	    //swap the classes
	    for(let i = 0; i < 6; i++){
	    	//the replace method for HTML elements classes, it replaces a class with another one.
	        items[i].classList.replace(`item-${order[i]}`,`item-${newOrder[i]}`);
	    }

	    //save the new order
	    order = newOrder;
	    setTimeout(()=>{
	    	res(dir);
    	},500);
	});
    

}


//helpers
function turnNext(){
    events.push(-1);
}
function turnPrevious(){
    events.push(1);
}

async function playEvents(){
	for(let ele of events){
		await animate(ele);
	}
	events = [];
}


previous.addEventListener('click',()=>{
	turnPrevious();
	if(events.length == 1){
		playEvents();
	}
});
next.addEventListener('click',()=>{
	turnNext();
	if(events.length == 1){
		playEvents();
	}
});*/





//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
//////// 					            //////
///////  Add-remove Listener approach  ///////
//////  				        	  ////////
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////

function animate(dir){
	//get the new order depending on the given direction.
    var newOrder = reOrder(order,dir);


    //remove the listeners.
    previous.onclick = undefined;
	next.onclick = undefined;

    //swap the classes
    for(let i = 0; i < 6; i++){
    	//the replace method for HTML elements classes, it replaces a class with another one.
        items[i].classList.replace(`item-${order[i]}`,`item-${newOrder[i]}`);
    }

    //save the new order.
    order = newOrder;
    setTimeout(()=>{
    	
    	//add the listeners after the animation is done.
		previous.onclick = ()=>{
			turnPrevious();
		}
		next.onclick = ()=>{
			turnNext();
		}

	},500);

}


//helpers
function turnNext(){
    animate(-1);
}
function turnPrevious(){
    animate(1);
}

previous.onclick = ()=>{
	turnPrevious();
}

next.onclick = ()=>{
	turnNext();
}
