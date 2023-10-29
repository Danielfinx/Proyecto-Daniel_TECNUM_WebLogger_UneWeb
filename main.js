const ctx= document.getElementById('myChart')
const datos= ['dato1', 'dato2', 'dato3', 'dato4', 'dato5']
const values= [24, 10, 54, 51, 15]

const myChart= new Chart(ctx, {
    type:'line',
    data: {
        labels: datos,
        datasets: [{
            label:'valores',
            data: values,
             backgroundColor: [
                 'rgba(66, 73, 136, 0.2)'
            ],
             borderColor: [
                 'rgba(66, 73, 136, 1)'
            ],
            borderWidth: 1.5,
            color: '#fff'
        }]
    }
})