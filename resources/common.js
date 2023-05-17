const nl2br = (str) => {
    str = str.replace(/\r\n/g, "<br />");
    str = str.replace(/(\n|\r)/g, "<br />");
    return str;
}

const getToday = () => {
    const now = new Date();
    const Year = now.getFullYear();
    // const Month = now.getMonth() + 1;
    const Month = ("0"+(now.getMonth()+1)).slice(-2);
    // const Date = now.getDate();
    const Date = ("0"+now.getDate()).slice(-2);

    return Year + "-" + Month + "-" + Date + "-";
}

export { nl2br, getToday }
