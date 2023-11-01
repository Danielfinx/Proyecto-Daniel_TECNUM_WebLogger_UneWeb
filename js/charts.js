
const myChart1= new Chart(document.getElementById('myChart1'), {
    type:'line',
    data: {
        labels: labelAxis_C1,
        datasets: [{
            label: descriptionLabel_C1,
            data: value_C1,
             backgroundColor: 'rgba(219, 45, 45, 0.2)',
             borderColor: 'rgb(219, 45, 45)',
            borderWidth: 1.5
        }]
    }
})

const myChart2= new Chart(document.getElementById('myChart2'), {
    type:'line',
    data: {
        labels: labelAxis_C2,
        datasets: [{
            label: descriptionLabel_C2,
            data: value_C2,
             backgroundColor: 'rgba(213, 216, 0, 0.2)',
             borderColor: 'rgb(213, 216, 0)',
            borderWidth: 1.5
        }]
    }
})

const myChart3= new Chart(document.getElementById('myChart3'), {
    type:'line',
    data: {
        labels: labelAxis_C3,
        datasets: [{
            label: descriptionLabel_C3,
            data: value_C3,
             backgroundColor: 'rgba(3, 132, 16, 0.2)',
             borderColor: 'rgb(3, 132, 16)',
            borderWidth: 1.5
        }]
    }
})

const myChart4= new Chart(document.getElementById('myChart4'), {
    type:'line',
    data: {
        labels: labelAxis_C4,
        datasets: [{
            label: descriptionLabel_C4,
            data: value_C4,
             backgroundColor: 'rgba(66, 73, 136, 0.2)',
             borderColor: 'rgba(66, 73, 136, 1)',
            borderWidth: 1.5
        }]
    }
})