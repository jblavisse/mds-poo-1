class MyTime {
    #hour;
    #minute;
    #second;

    constructor(hour, minute, second) {
        this.hour = hour;
        this.minute = minute;
        this.second = second;
    }

    get hour() {
        return this.#hour.toString().padStart(2,"0");
    }

    set hour(hour) {
        if(hour>=0 && hour<24) {
            this.#hour = hour;
        }
    }

    get minute() {
        return this.#minute.toString().padStart(2,"0");
    }

    set minute(minute) {
        if(minute>=0 && minute<60) {
            this.#minute = minute;
        }
    }

    get second() {
        return this.#second.toString().padStart(2,"0");
    }

    set second(second) {
        if(second>=0 && second<60) {
            this.#second = second;
        }
    }

    show() {
        console.log(`${this.hour}h ${this.minute}min et ${this.second}s`);
    }


    nextSecond() {
        this.#second++;
        if(this.#second >= 60) {
            this.#second = 0;
            this.nextMinut();
        }
    }

    nextMinut() {
        this.#minute++;
        if(this.#minute >= 60) {
            this.#minute = 0;
            this.nextHour();
        }
    }

    nextHour() {
        this.#hour++;
        if(this.#hour >= 24) {
            this.#hour = 0;
            this.#minute = 0;
            this.#second = 0;
        }
    }
}

let currentTime = new MyTime(22,59,59);

console.log(currentTime);
currentTime.show();

currentTime.nextSecond();
currentTime.show();