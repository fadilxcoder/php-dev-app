import $ from "jquery";
const validator = require('validator');

$(document).ready(function() {
    console.log("dev", validator.isEmail('foo@bar.com'));
});
