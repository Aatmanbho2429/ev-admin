
//setup
const data = {
  labels: ["Tesla", "TATA Motors", "MG", "Other"],
  datasets: [
    {
      label: "chargers",
      data: [4, 9, 7, 15],
      backgroundColor: [
        "#ea52ae",
        "#8a7eed",
        "#33ddf0",
        "#ffa954",
      ],
      borderColor: [
        "#ea52ae",
        "#8a7eed",
        "#33ddf0",
        "#ffa954",
      ],
      borderWidth: 1,
    },
  ],
};

//options block
const options = {
  plugins:{
    legend:{
      display:true,
      position:'bottom',
      labels:{
        color:"#fff",
        usePointStyle:'true',
        pointStyle:'circle',
        font: {
          size: 20
      },
      }
    }
  }
}

//config
const config = {
  type: "pie",
  data,
  options
}

//render
const myChart = new Chart(
  document.getElementById('myChart'),
  config
);

