exports.success = async function (msg, payload, res) {
    sendResponse(200, msg, payload, res);
};

exports.created = async function (msg, payload, res) {
    sendResponse(201, msg, payload, res);
};

exports.noContent = async function (msg, payload, res) {
    sendResponse(204, msg, payload, res);
};

exports.badRequest = async function (msg, payload, res) {
    sendResponse(400, msg, payload, res);
};

exports.unauthorized = async function (msg, payload, res) {
    sendResponse(401, msg, payload, res);
};

exports.forbidden = async function (msg, payload, res) {
    sendResponse(403, msg, payload, res);
};

exports.notFound = async function (msg, payload, res) {
    sendResponse(404, msg, payload, res);
};

exports.exception = async function (msg, payload, res) {
    sendResponse(500, msg, payload, res);
};

async function sendResponse(code, msg, payload, res) {
    $response = {
        msg: msg
    };
    if (!!payload) {
        $response['payload'] = payload;
    }
    return res.status(code).send($response);
}