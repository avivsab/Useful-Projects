const express = require('express');
const server = express();
var csv = require('csv');

const filePath = './ExampleMap.csv';

    var csv = require('csv-array');
    csv.parseCSV(filePath, function(data){
       
      console.log(data);
      const mainDataArray = data
      const appleSizeArr = [];
      const applePosXArr = []
      mainDataArray.forEach((element) => {
        appleSizeArr.push(element.Size); 
        applePosXArr.push([parseFloat(element.x_position) + ',' + parseFloat(element.y_position)])

    });
    server.get('/', (req,res) =>{
        res.send(mainDataArray)
    })
      
    });


const PORT = process.env.PORT||5000;
server.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
module.exports = server;