var mongoose = require("mongoose");
var ChatSessionSchema = mongoose.Schema({
    session_id: { type: String, required: true },
    question: {
        type: mongoose.Schema.Types.ObjectId,
        ref: 'questionnaire'
    },
    answer: { type: String, required: true },
    related_to: { type: String, required: true },
    created: {
        type: Date,
        default: Date.now
    }
});

ChatSessionSchema
    .virtual('details')
    .get(function () {
        return {
            session_id:this.session_id,
            question: this.question,
            answer: this.answer,
            related_to: this.related_to
        }
    });

var ChatSession = mongoose.model("ChatSession", ChatSessionSchema, 'chat_sessions');
exports.ChatSession = ChatSession;