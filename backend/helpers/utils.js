//["only_alphanumaric", "only_string", "only_number", "only_date", "not_blank"];

exports.only_alphanumaric = function (value) {

}

exports.only_string = function (value) {

}

exports.only_number = function (value) {

}

exports.only_date = function (value) {

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