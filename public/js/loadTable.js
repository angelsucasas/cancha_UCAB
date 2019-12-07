$('#left-panel').on('hide.bs.collapse', function () {
    $("#myContent").removeClass("col-md-9").addClass("col-md-12");
});
$('#left-panel').on('show.bs.collapse', function () {
    $("#myContent").removeClass("col-md-12").addClass("col-md-9");
});

window.onload =() => {
    createEmptyTable();

    let table = document.getElementById("myTable-info");

    let allSubs = [];

    if(table){
        let tr = table.getElementsByTagName("tr");
        for (let index = 1; index < tr.length; index++) {
            const row = tr[index].getElementsByTagName("td");
            const h_array = changeToTimeArray(row[4].textContent);
            const s={
                key : row[0].textContent,
                name: row[2].textContent,
                gpo: row[1].textContent,
                profesor : row[3].textContent,
                horario_ini : h_array[0] ,
                horario_fin : h_array[1] ,
                dias: changeToDayArraY(row[5].textContent)
            }  
            allSubs.push(s);
        }
    }  
    
    for (const sub of allSubs) 
        placeSubject(sub);   

}

const changeToTimeArray = (horario) => {
    let nhorario = horario.split(" a ");
    let h_ini = nhorario[0].split(":");
    let h_fin = nhorario[1].split(":");

    let ini = new MyTime(parseInt(h_ini[0], 10),parseInt(h_ini[1], 10));
    let fin = new MyTime(parseInt(h_fin[0], 10),parseInt(h_fin[1], 10));

    return [ini,fin];
}

const changeToDayArraY = (dias) => {

    let ndias = dias.split(", ");
    let edias = [];

    for (const dia of ndias) {
        switch (dia) {
            case "Lun":
                edias.push(days.Lun);
                break;
            case "Mar":
                edias.push(days.Mar);
                break;
            case "Mie":
                edias.push(days.Mie);
                break;                
            case "Jue":
                edias.push(days.Jue);
                break;                
            case "Vie":
                edias.push(days.Vie);
                break;                
            case "Sab":
                edias.push(days.Sab);
                break;        
            default:
                break;
        }
    }
    return edias;

}

const createEmptyTable = () => {
    var initTime = new MyTime(7,0);
    var endTime = new MyTime(23,0);
    var lapsus = new MyTime(0,15);

    var output = "";

    output += `
    <table class="table table-bordered table-sm" id="mytable">
    <thead><tr><th>Hora</th>`;

    
    for (let key in days) {
      output += `<th> ${p_day(days[key])} </th>`;
    }
    output += `</tr></thead><tbody>`;

    var tt = timeSubtraction(initTime,lapsus);

    do{
        output += `<tr><td>`;
        output+= initTime + `</td>`;
        
        tt = timeSum(tt,lapsus);
        initTime = timeSum(tt,lapsus);
        
        for (let j = 0; j < Object.keys(days).length; j++) {
            output += `<td class="${j+1}"></td>`      
        }
        output += `</tr>`;
        
    } while(!isTimeEquals(tt,endTime)) ;

    output += ` </tbody> </table>`; 
    document.getElementById("horario").innerHTML = output;
}

const placeSubject = (subject) => {


    let initTime = new MyTime(7,0)
    let table = document.getElementById("mytable");
    let tr = table.getElementsByTagName("tr");
  
    let verticalTime = timeSubtraction(subject.horario_ini,initTime);
    
    let subjectTime = timeSubtraction(subject.horario_fin,subject.horario_ini);

    let verticalOffset = offsetNumber(verticalTime)+1;
    
    let subjOffset = offsetNumber(subjectTime);
    
    let td = tr[verticalOffset].getElementsByTagName("td");

    let rand_color = getRandomColor(); 

    for (let dia of subject.dias) {
        //let t = tr[verticalOffset].getElementById(dia);
        console.log(tr[verticalOffset]);        
        td[dia].style.backgroundColor = rand_color; 
        td[dia].innerHTML =`
        <div class="p-2 text-center">
            <h6>${subject.name} (${subject.key}, ${subject.gpo}) </h6>
            <span>${subject.profesor}</span>
        </div>`;
        td[dia].rowSpan = subjOffset;  
    }
}

const getRandomColor = () => {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
  

class MyTime{

    constructor(hours,minutes) {
        this.hours = hours;
        this.minutes = minutes;
    }

}

const scheduleOverlapses = (h1,h2) => {
    if (timeOneIsGreeter(h1.horario_ini,h2.horario_ini)){
        if (timeOneIsGreeter(h2.horario_fin,h1.horario_ini)) 
            return true;
    }else{
        if (timeOneIsGreeter(h1.horario_fin,h2.horario_ini)) 
            return true;        
    }
    return false;
}

const timeOneIsGreeter = (t1,t2) => {
    if (t1.hours > t2.hours) {
        return true;
    }
    if (t1.hours == t2.hours && 
        t1.minutes > t2.minutes ) {
        return true;
    }
    return false;
}

const isTimeEquals = (t1, t2) => {

    if ( t1.hours == t2.hours && 
        t1.minutes == t2.minutes)
        return true;
    return false;    
}

const timeSum = (t1,t2) => {
    let h = t1.hours + t2.hours;
    let m = t1.minutes + t2.minutes;

    if( m >= 60){
        m -= 60;
        h++;
    }
    if (h >= 24)
        h -= 24;

    return new MyTime(h,m);
}

const timeSubtraction = (time1, time2) => {
    let hours = time1.hours - time2.hours;
    let minutes = time1.minutes - time2.minutes;
    hours > 24 ? hours -= 24 : {}
    
    if (minutes < 0){
        minutes = 60 + minutes;
        hours --;
    }

    return new MyTime(hours,minutes);
}

const offsetNumber= (time) => {
    var contador = 0;
    let minutes = time.minutes;
    let hours = time.hours;

    contador += hours * 4;
    contador += Math.trunc(minutes / 15 ) ;
    
    return contador;
}

MyTime.prototype.toString = function(){
    let output = "";
    this.hours < 10 ?  output += "0" :{}
    output += this.hours + `:` ;        
    this.minutes < 10 ? output += "0" :{}
    output+= this.minutes
    return output;
}

const days = {
    Lun: 1,
    Mar: 2,
    Mie: 3,
    Jue: 4,
    Vie: 5,
    Sab: 6
}

const p_day = (day) => {
    if ( day === 1 ) return "Lun";
    if ( day === 2 ) return "Mar";
    if ( day === 3 ) return "Mie";
    if ( day === 4 ) return "Jue";
    if ( day === 5 ) return "Vie";
    if ( day === 6 ) return "Sab";

    return "";
}

const p_days = (days) => {
    let output = "";

    for (const day of days) {
        day === 1 ? output += "Lun" : {}
        day === 2 ? output += "Mar" : {}
        day === 3 ? output += "Mie" : {}
        day === 4 ? output += "Jue" : {}
        day === 5 ? output += "Vie" : {}
        day === 6 ? output += "Sab" : {}
        output += ", "
    }
    /* le quitamos los últimos 2 lugares, uno corresponde 
    al del espacio en blanco y el otro al de la coma */
    return output.slice(0,output.length-2);
}