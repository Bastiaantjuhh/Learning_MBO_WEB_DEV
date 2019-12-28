window.addEventListener("DOMContentLoaded", function() {
  window.alert("Hello world");

  document.getElementById("h1").addEventListener("click", function() {
    increaseFontSize();
    // console.log("Klik: H1");
  });

  function increaseFontSize() {
    const Font = document.getElementById("h1");
    const Style = window.getComputedStyle(Font);
    const Size = parseInt(Style.getPropertyValue("font-size")) + 1;
    // console.log(Size);
    Font.style.fontSize = Size + "px";
  }

  document.getElementById("link").addEventListener("click", function() {
    addNewElement();
    // console.log("Klik: A");
  });

  function addNewElement() {
    const el = document.getElementById("box");
    const addText = document.createElement("p");
    addText.innerHTML =
      "Cat ipsum dolor sit amet, attack the child or cough furball and lie on your belly and purr when you are asleep. Slap the dog because cats rule bury the poop bury it deep or scratch the postman wake up lick paw wake up owner meow meow wake up wander around the house making large amounts of noise jump on top of your human's bed and fall asleep again, do i like standing on litter cuz i sits when i have spaces, my cat buddies have no litter i live in luxury cat life. Pretend you want to go out but then don't cats are cute or miaow then turn around and show you my bum catch mouse and gave it as a present burrow under covers, and cat mojo . Play time wake up human for food at 4am, and flop over, for intrigued by the shower. Lick yarn hanging out of own butt cats are a queer kind of folk. Touch my tail, i shred your hand purrrr meowwww or climb leg ask for petting. Sit on human my slave human didn't give me any food so i pooped on the floor, chew the plant allways wanting food yet dead stare with ears cocked where is my slave? I'm getting hungry yowling nonstop the whole night. Eat a plant, kill a hand ears back wide eyed and scratch my tummy actually i hate you now fight me yet pelt around the house and up and down stairs chasing phantoms for touch my tail, i shred your hand purrrr but refuse to come home when humans are going to bed; stay out all night then yowl like i am dying at 4am. Throwup on your pillow present belly, scratch hand when stroked. Cat cat moo moo lick ears lick paws. Poop on floor and watch human clean up munch, munch, chomp, chomp chirp at birds so sit in a box for hours lick yarn hanging out of own butt. Annoy the old grumpy cat, start a fight and then retreat to wash when i lose my water bowl is clean and freshly replenished, so i'll drink from the toilet meow meow we are 3 small kittens sleeping most of our time, we are around 15 weeks old i think, i don’t know i can’t count intently stare at the same spot, so meow. Touch water with paw then recoil in horror pet me pet me don't pet me cough furball, ignore the squirrels, you'll never catch them anyway, making bread on the bathrobe eats owners hair then claws head it's 3am, time to create some chaos . Spend six hours per day washing, but still have a crusty butthole. Sit on the laptop toilet paper attack claws fluff everywhere meow miao french ciao litterbox and love and coo around boyfriend who purrs and makes the perfect moonlight eyes so i can purr and swat the glittery gleaming yarn to him (the yarn is from a $125 sweater). Purrr purr littel cat, little cat purr purr.";

    el.appendChild(addText);

    const addPicture = document.createElement("img");
    addPicture.src = "picture.jpg";

    el.appendChild(addPicture);
  }
});
