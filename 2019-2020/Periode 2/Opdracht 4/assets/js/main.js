(function() {
  "use strict";

  let battery;

  function readBattery(b) {
    battery = b || battery;

    // Zorgt ervoor dat batterij perentage een heel getal wordt i.p.v. gebroken getal
    // Zorgt er ook voor dat er geen 0.100 (bij honderd procent) wordt weergegeven
    let percentage = parseFloat((battery.level * 100).toFixed(2));

    // Roept TTS (text-to-speach) API aan. Zodat we deze kunnen gebruiken.
    let tts = new SpeechSynthesisUtterance();

    console.log(percentage);

    // Toevoegen van CSS aan de battery op de batterij
    document.styleSheets[0].insertRule(
      ".battery:before { width:" +
        percentage +
        "%; background-color:" +
        colorBattery(percentage) +
        "; }",
      0
    );

    // Weergave van batterij percentage
    document.querySelector(".battery-percentage").innerHTML = percentage + "%";

    // Oplader of batterij als stroombron
    document.querySelector(".battery-status").innerHTML = battery.charging
      ? "Oplader"
      : "Batterij";

    // Weergave van batterij percentage
    document.querySelector(".battery-level").innerHTML = percentage + "%";

    // TODO: Button van maken i.p.v. automatisch afspelen van audio.
    // FOUTMELDING: [Deprecation] speechSynthesis.speak() without user activation is no longer allowed since M71,
    // around December 2018. See https://www.chromestatus.com/feature/5687444770914304 for more details.
    tts.text = "Het batterij percentage is " + percentage + " procent.";
    // Taal volgens ISO standaarden (nl-NL)
    tts.lang = "nl-NL";
    // Snelheid van de spraak. 1.2 is een normale spraaksnelheid
    tts.rate = 1.2;
    // Uitvoeren TTS (text-to-speach)
    speechSynthesis.speak(tts);
  }

  function colorBattery(percentage) {
    if (percentage === 100) {
      // Percentage is 100
      // Batterijkleur: Groen
      return "green";
    } else if (percentage <= 99 && percentage >= 91) {
      // Percentage is 99 of 91 en hoger
      // Batterijkleur: Groen
      return "green";
    } else if (percentage <= 90 && percentage >= 20) {
      // Percentage is 90 of 20 en hoger
      // Batterijkleur: Geel
      return "yellow";
    } else {
      // Percentage overige
      // Batterijkleur: Rood
      return "red";
    }
  }

  if (navigator.battery) {
    readBattery(navigator.battery);
  } else if (navigator.getBattery) {
    navigator.getBattery().then(readBattery);
  } else {
    // Melding als batteryAPI niet wordt ondersteund
    console.log("ERROR: Browser ondersteund de BatteryAPI niet.");
  }

  // Toevoegen van een 'listener' voor het controlleren van de batteeij status.
  // Voegt twee listeners toe.
  window.onload = function() {
    battery.addEventListener("chargingchange", function() {
      readBattery();
    });
    battery.addEventListener("levelchange", function() {
      readBattery();
    });
  };
})();
