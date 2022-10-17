//setup
const data = {
  labels: ["Tesla", "TATA Motors", "MG", "Other"],
  datasets: [
    {
      label: 'Ahemdabad',
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
    },
    {
      label: 'Surat',
      data: [7, 4, 15, 9],
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
    },
    {
      label: 'Rajkot',
      data: [1, 2, 5, 9],
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
    },
    {
      label: 'Jaipur',
      data: [9, 4, 16, 1],
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
    }
  ]
};

//options block
const options = {
  responsive: true,
  plugins: {
    legend: {
      position: 'bottom',
      labels:{
        usePointStyle:'true',
      }
    },
    title: {
      display: true,
      text: 'NEW USERS',
      color:'#fff',
      font: {
        size: 28
    }
    }
  }
}

//config
const config = {
  type: 'line',
  data,
  options,
}

//render
const myChart = new Chart(
  document.getElementById('myChart'),
  config
);

