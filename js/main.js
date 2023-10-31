
const myChart1= new Chart(document.getElementById('myChart1'), {
    type:'line',
    data: {
        labels: labelaxis_chart1,
        datasets: [{
            label: desciptionlabel_chart1,
            data: dato_chart1,
             backgroundColor: [
                 'rgba(219, 45, 45, 0.2)'
            ],
             borderColor: [
                 'rgb(219, 45, 45)'
            ],
            borderWidth: 1.5,
            color: '#1f2937'
        }]
    }
})

const myChart2= new Chart(document.getElementById('myChart2'), {
    type:'line',
    data: {
        labels: ['dato1', 'dato2', 'dato3', 'dato4', 'dato5'],
        datasets: [{
            label:'value',
            data: [24, 10, 54, 51, 15],
             backgroundColor: [
                 'rgba(213, 216, 0, 0.2)'
            ],
             borderColor: [
                 'rgb(213, 216, 0)'
            ],
            borderWidth: 1.5,
            color: '#1f2937'
        }]
    }
})

const myChart3= new Chart(document.getElementById('myChart3'), {
    type:'line',
    data: {
        labels: ['dato1', 'dato2', 'dato3', 'dato4', 'dato5'],
        datasets: [{
            label:'value',
            data: [24, 10, 54, 51, 15],
             backgroundColor: [
                 'rgba(3, 132, 16, 0.2)'
            ],
             borderColor: [
                 'rgb(3, 132, 16)'
            ],
            borderWidth: 1.5,
            color: '#1f2937'
        }]
    }
})

const myChart4= new Chart(document.getElementById('myChart4'), {
    type:'line',
    data: {
        labels: ['dato1', 'dato2', 'dato3', 'dato4', 'dato5'],
        datasets: [{
            label:'value',
            data: [24, 10, 54, 51, 15],
             backgroundColor: [
                 'rgba(66, 73, 136, 0.2)'
            ],
             borderColor: [
                 'rgba(66, 73, 136, 1)'
            ],
            borderWidth: 1.5,
            color: '#1f2937'
        }]
    }
})