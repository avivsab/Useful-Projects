const mongoose = require('mongoose');  
const AppleSchema = new mongoose.Schema({  
  ID: Number,
  XPosition: Number,
  YPosition: Number,
  color: String,
  size: Number,
  rightness:Number
});
mongoose.model('Apple', AppleSchema);
module.exports = mongoose.model('Apple');