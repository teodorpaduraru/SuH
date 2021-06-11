/*javascript pentru nivel intermediar al jocului*/

const e = "http://localhost/SuH/public/scripts/data/heroes-quiz-questions.json";

function t(e, t = 1) {
    return 1 === t && ([e, t] = [t, e]), Math.floor((t - e + 1) * Math.random()) + e
}

function s(e) {
    for (let s = e.length; s; s--) {
        let o = t(s) - 1;
        [e[s - 1], e[o]] = [e[o], e[s - 1]]
    }
}
fetch(e).then(e => e.json()).then(e => {
    o.start.addEventListener("click", () => n.start(e.questions), !1), o.response.addEventListener("click", e => n.check(e), !1)
});
const o = {
    score: document.querySelector("#score strong"),
    question: document.querySelector("#question"),
    result: document.querySelector("#result"),
    info: document.querySelector("#info"),
    start: document.querySelector("#start"),
    response: document.querySelector("#response"),
    timer: document.querySelector("#timer strong"),
    hiScore: document.querySelector("#hiScore strong"),
    render(e, t, s) {
        for (const t in s) e.setAttribute(t, s[t]);
        e.innerHTML = t
    },
    show(e) {
        e.style.display = "block"
    },
    hide(e) {
        e.style.display = "none"
    },
    setup() {
        this.show(this.question),
            this.show(this.response),
            this.hide(this.result),
            this.hide(this.info),
            this.hide(this.start),
            this.render(this.score, n.score),
            this.render(this.result, ""),
            this.render(this.info, ""),
            this.render(this.hiScore, n.hiScore())
    },
    teardown() {
        this.hide(this.question),
            this.hide(this.response),
            this.hide(this.result),
            this.show(this.start),
            this.render(this.hiScore, n.hiScore())
    },
    buttons: e => e.map(e => `<button class="quiz__options">${e}</button>`).join("")
},
    n = {
        start(e) {
            console.log("start() invoked"),
                this.score = 0,
                this.questions = [...e],
                o.setup(),
                this.secondsRemaining = 60,
                this.timer = setInterval(this.countdown, 1e3),
                this.ask()
        },
        countdown() {
            n.secondsRemaining--,
                o.render(o.timer, n.secondsRemaining), n.secondsRemaining <= 0 && n.gameOver()
        },
        ask() {
            if (console.log("ask() invoked"), this.questions.length > 2) {
                s(this.questions),
                    this.question = this.questions.pop();
                const e = [this.questions[0].realName, this.questions[1].realName, this.question.realName];
                s(e);
                const t = `What is ${this.question.name}'s real name?`;
                o.render(o.question, t), o.render(o.response, o.buttons(e))
            } else this.gameOver()
        },
        check(e) {
            console.log("check(event) invoked");
            const t = e.target.textContent,
                s = this.question.realName;
            t === s ? (console.log("correct"),
                o.render(o.result, "Correct!", {
                    class: "correct"
                }),
                this.score = this.score + 3,
                o.render(o.score, this.score)) : (console.log("wrong"),
                    o.render(o.result, `Wrong! The correct answer was ${s}`, {
                        class: "wrong"
                    })),
                o.show(o.result),
                this.ask()
        },
        gameOver() {
            console.log("gameOver() invoked"),
                o.render(o.info, `Game Over, you scored ${this.score} point${1 !== this.score ? "s" : ""}`),
                o.show(o.info),
                o.teardown(),
                clearInterval(this.timer)
        },
        hiScore() {
            const e = localStorage.getItem("highScore") || 0;
            return (this.score > e || 0 === e) && (localStorage.setItem("highScore", this.score),
                o.render(o.info, "** NEW HIGH SCORE! **")),
                localStorage.getItem("highScore")
        }
    };