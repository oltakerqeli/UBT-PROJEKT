const concerts=[
    {city:"Washington DC", date:"Jan 21 2025"},
    {city:"New Yourk",date:"Jan 24 2025"},
    {city:"New Yourk",date:"Jan 25 2025"},
    {city:"Los Angelos",date:"Jan 28 2025"},
    {city:"Los Angelos",date:"Jan 29 2025"},
    {city:"Las Vegas",date:"Feb 1 2025"}
];

const concertContainer=document.getElementById('concerts');

concerts.forEach(concert =>{
   const concertInfo=document.createElement('p');
   concertInfo.innerHTML=`${concert.city} - ${concert.date}`;
  

   concertContainer.appendChild(concertInfo);

});

