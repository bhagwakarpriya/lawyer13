module.exports = function(err, req, res, next) {
    res.status(400).send({
        msg: 'there was an error processing the request', 
        error: err.message,
    })
}

exports.ErrorResponse = function (res, code, msg) {
    res.status(code).send({
        msg: msg
    })
}