import $ from "jquery";
const validator = require('validator');
import doc from 'js-yaml-loader!../_conf.yml';

$(document).ready(function() {
    console.log(validator.isEmail('foo@bar.com'), doc['xmas-fifth-day']['turtle-doves'], doc.pi);
});
