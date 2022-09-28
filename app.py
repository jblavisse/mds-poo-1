class MyTime :
    def __init__(self,hour, minute, second):
        self.hour = hour
        self.minute = minute
        self.second = second

    # Ca va être appliqué si je fais un (self.hour)
    @property
    def hour(self):
        return "{:02d}".format(self.__hour)


    # Ca va se lancer quand je vais faire un self.hour =
    @hour.setter
    def hour(self,hour) :
        if(hour>=0 and hour<24) :
            self.__hour = hour


    @property
    def minute(self) :
        return "{:02d}".format(self.__minute)


    @minute.setter
    def minute(self,minute) :
        if(minute>=0 and minute<60) :
            self.__minute = minute


    @property
    def second(self) :
        return "{:02d}".format(self.__second)

    @second.setter
    def second(self,second) :
        if(second>=0 and second<60) :
            self.__second = second



    def show(self) :
        print(f"{self.hour}h {self.minute}min et {self.second}s")



    def nextSecond(self) :
        self.__second+=1
        if(self.__second >= 60) :
            self.__second = 0
            self.nextMinut()



    def nextMinut(self) :
        self.__minute+=1
        if(self.__minute >= 60) :
            self.__minute = 0
            self.nextHour()



    def nextHour(self) :
        self.__hour+=1
        if(self.__hour >= 24) :
            self.__hour = 0
            self.__minute = 0
            self.__second = 0




currentTime = MyTime(22,59,59)

currentTime.show()

currentTime.nextSecond()
currentTime.show()