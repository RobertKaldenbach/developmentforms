
/*** This JS method finds the correct triangle based off corresponding sides. Throws error message on the screen if it isn't a triangle. ****/


var Triangle = function(a,b,c) { this.triangle = [a,b,c].sort() }

// To find the type of triangle 
Triangle.prototype.kind = function() {
  
  //Sides smallest to largest 
  var a = this.triangle[0];
	var b = this.triangle[1];
	var c = this.triangle[2];
  
  if (a < 0) 
		throw "Only positive length sides are allowed";
	if (a * b * c == 0)
		throw "Triangle cannot have zero area";
	if (a + b < c)
		throw "Not a valid triangle";  
 
// Returns the correct triangle 
  
	if (a === b && b === c)
		return "equilateral";
	if(a === b || b === c)
		return "isosceles";
	return "scalene";
  
  //Error message in case it is not a triangle 
 

  
}; 
