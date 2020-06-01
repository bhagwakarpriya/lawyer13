//["only_alphanumaric", "only_string", "only_number", "only_date", "not_blank"];

exports.only_alphanumaric = function (value) {
 return value.match(/^[0-9a-zA-Z ]+$/);
}

exports.only_string = function (value) {
  return value.match(/^[A-Za-z ]+$/);
}

exports.only_number = function (value) {
  return value.match(/^[0-9]+$/);
} 

exports.only_email = function (value) {
  return value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
}

exports.not_blank = function (value) {
  return !(value === undefined || value.length === 0)
}

exports.getRandomString = function (lengthOfString) {
  let str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
  let result = '';
  for (let i = 1; i <= lengthOfString; i++) {
    let c = str[Math.floor(Math.random() * lengthOfString)];
    result += c;
  }
  return result;
}