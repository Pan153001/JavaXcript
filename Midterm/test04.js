function getDay(startDateStr, endDateStr) {
    const weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  
    const startDate = new Date(startDateStr);
    const endDate = new Date(endDateStr);
  
    const startDay = weekdays[startDate.getDay()];
    const endDay = weekdays[endDate.getDay()];
  
    return `Start day: ${startDay}, End day: ${endDay}`;
  }
  
  console.log(getDay("January 25, 2019", "January 30, 2019"));
  