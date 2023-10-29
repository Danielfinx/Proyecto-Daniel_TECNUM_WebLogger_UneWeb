const ctx1= document.getElementById('myChart1')
const datos1= ['dato1', 'dato2', 'dato3', 'dato4', 'dato5']
const values1= [24, 10, 54, 51, 15]

const myChart1= new Chart(ctx1, {
    type:'line',
    data: {
        labels: datos1,
        datasets: [{
            label:'valores',
            data: values1,
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

const ctx2= document.getElementById('myChart2')
const datos2= ['dato1', 'dato2', 'dato3', 'dato4', 'dato5']
const values2= [24, 10, 54, 51, 15]

const myChart2= new Chart(ctx2, {
    type:'line',
    data: {
        labels: datos2,
        datasets: [{
            label:'valores',
            data: values2,
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

const ctx3= document.getElementById('myChart3')
const datos3= ['dato1', 'dato2', 'dato3', 'dato4', 'dato5']
const values3= [24, 10, 54, 51, 15]

const myChart3= new Chart(ctx3, {
    type:'line',
    data: {
        labels: datos3,
        datasets: [{
            label:'valores',
            data: values3,
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

const ctx4= document.getElementById('myChart4')
const datos4= ['dato1', 'dato2', 'dato3', 'dato4', 'dato5']
const values4= [24, 10, 54, 51, 15]

const myChart4= new Chart(ctx4, {
    type:'line',
    data: {
        labels: datos4,
        datasets: [{
            label:'valores',
            data: values4,
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