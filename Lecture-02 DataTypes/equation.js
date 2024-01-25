function equation(expr) {
    try {
      return eval(expr);
    } catch (error) {
      return "Invalid expression";
    }
  }
  
  console.log(equation("1+1")); // 2
  console.log(equation("2*3")); // 6
  console.log(equation("10/2")); // 5
  console.log(equation("5 - 3")); // 2
  