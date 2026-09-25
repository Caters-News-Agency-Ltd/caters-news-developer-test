<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Not called from DatabaseSeeder — run manually with:
     * php artisan db:seed --class=VideoSeeder
     */
    public function run(): void
    {
        $videos = [
            ['title' => 'Golden Retriever Puppies Play in Garden', 'description' => 'A litter of golden retriever puppies tumble and play together in a sunny back garden.', 'url' => 'https://cdn.example.test/testing/videos/video-1.mp4'],
            ['title' => 'Grandparents Celebrate Golden Wedding Anniversary', 'description' => 'A couple celebrates fifty years of marriage surrounded by children and grandchildren.', 'url' => 'https://cdn.example.test/testing/videos/video-2.mp4'],
            ['title' => 'Footballers Battle for Ball in Cup Final', 'description' => 'Two players tussle for possession during a hard-fought domestic cup final.', 'url' => 'https://cdn.example.test/testing/videos/video-3.mp4'],
            ['title' => 'Waterfall Cascades Through Rainforest Canyon', 'description' => 'A powerful waterfall crashes down a rocky canyon deep within a tropical rainforest.', 'url' => 'https://cdn.example.test/testing/videos/video-4.mp4'],
            ['title' => 'Chef Plates Dessert in Busy Kitchen', 'description' => 'A pastry chef carefully plates a delicate dessert during a busy dinner service.', 'url' => 'https://cdn.example.test/testing/videos/video-5.mp4'],
            ['title' => 'Train Winds Through Alpine Mountain Pass', 'description' => 'A scenic train winds slowly along tracks cut into a dramatic alpine pass.', 'url' => 'https://cdn.example.test/testing/videos/video-6.mp4'],
            ['title' => 'Guitarist Performs Solo at Outdoor Festival', 'description' => 'A guitarist plays an extended solo on stage at a sunny outdoor music festival.', 'url' => 'https://cdn.example.test/testing/videos/video-7.mp4'],
            ['title' => 'Engineer Tests Drone in Warehouse', 'description' => 'An engineer runs flight tests on a prototype drone inside a large warehouse.', 'url' => 'https://cdn.example.test/testing/videos/video-8.mp4'],
            ['title' => 'Snow Falls Steadily Over Quiet Village', 'description' => 'Thick snow falls steadily over the rooftops of a quiet mountain village.', 'url' => 'https://cdn.example.test/testing/videos/video-9.mp4'],
            ['title' => 'Volunteers Clean Up Local Beach', 'description' => 'A group of volunteers collects litter along a stretch of local beach.', 'url' => 'https://cdn.example.test/testing/videos/video-10.mp4'],
            ['title' => 'Elephant Herd Crosses Savannah River', 'description' => 'A herd of elephants wades across a shallow river on the African savannah at dusk.', 'url' => 'https://cdn.example.test/testing/videos/video-11.mp4'],
            ['title' => 'Toddler Takes First Steps in Living Room', 'description' => 'A one-year-old takes wobbly first steps across the living room to a parent.', 'url' => 'https://cdn.example.test/testing/videos/video-12.mp4'],
            ['title' => 'Sprinter Crosses Finish Line in Photo Finish', 'description' => 'A sprinter leans forward to edge out a rival at the finish line of a 100m race.', 'url' => 'https://cdn.example.test/testing/videos/video-13.mp4'],
            ['title' => 'Storm Clouds Roll Over Open Plains', 'description' => 'Dark storm clouds gather and roll across a wide stretch of open farmland.', 'url' => 'https://cdn.example.test/testing/videos/video-14.mp4'],
            ['title' => 'Street Vendor Grills Skewers at Night Market', 'description' => 'A street food vendor grills skewers over hot coals at a bustling night market.', 'url' => 'https://cdn.example.test/testing/videos/video-15.mp4'],
            ['title' => 'Tourists Explore Ancient Stone Ruins', 'description' => 'A group of tourists wanders through the weathered stone ruins of an old city.', 'url' => 'https://cdn.example.test/testing/videos/video-16.mp4'],
            ['title' => 'Orchestra Rehearses in Concert Hall', 'description' => 'A full orchestra rehearses a symphony under the conductor in an empty concert hall.', 'url' => 'https://cdn.example.test/testing/videos/video-17.mp4'],
            ['title' => 'Robot Arm Assembles Parts on Production Line', 'description' => 'An industrial robot arm precisely assembles components along a factory line.', 'url' => 'https://cdn.example.test/testing/videos/video-18.mp4'],
            ['title' => 'Heatwave Shimmers Over City Streets', 'description' => 'Heat haze shimmers above sun baked asphalt during a summer heatwave.', 'url' => 'https://cdn.example.test/testing/videos/video-19.mp4'],
            ['title' => 'Neighbours Plant Trees in Community Garden', 'description' => 'Local residents plant saplings together in a shared community garden plot.', 'url' => 'https://cdn.example.test/testing/videos/video-20.mp4'],
            ['title' => 'Cat Chases Laser Pointer Around Living Room', 'description' => 'A curious house cat darts around furniture while chasing a red laser pointer dot.', 'url' => 'https://cdn.example.test/testing/videos/video-21.mp4'],
            ['title' => 'Family Bakes Cookies Together in Kitchen', 'description' => 'Parents and two children mix dough and decorate cookies together in a busy kitchen.', 'url' => 'https://cdn.example.test/testing/videos/video-22.mp4'],
            ['title' => 'Surfer Rides Large Wave at Dawn', 'description' => 'A surfer carves along the face of a large wave as the sun rises over the ocean.', 'url' => 'https://cdn.example.test/testing/videos/video-23.mp4'],
            ['title' => 'Autumn Leaves Fall in Forest Breeze', 'description' => 'Golden autumn leaves drift down from tall trees in a gentle woodland breeze.', 'url' => 'https://cdn.example.test/testing/videos/video-24.mp4'],
            ['title' => 'Baker Kneads Dough in Morning Bakery', 'description' => 'A baker kneads fresh dough by hand before dawn in a small town bakery.', 'url' => 'https://cdn.example.test/testing/videos/video-25.mp4'],
            ['title' => 'Sailboat Drifts Past Coastal Cliffs', 'description' => 'A lone sailboat drifts along the coastline beneath towering white cliffs.', 'url' => 'https://cdn.example.test/testing/videos/video-26.mp4'],
            ['title' => 'Street Musician Plays Violin in Square', 'description' => 'A street musician plays violin for passersby in a busy city square.', 'url' => 'https://cdn.example.test/testing/videos/video-27.mp4'],
            ['title' => 'Programmer Reviews Code on Multiple Monitors', 'description' => 'A software developer reviews lines of code across a bank of monitors.', 'url' => 'https://cdn.example.test/testing/videos/video-28.mp4'],
            ['title' => 'Hurricane Winds Bend Palm Trees on Coast', 'description' => 'Strong hurricane winds bend palm trees along a battered coastal town.', 'url' => 'https://cdn.example.test/testing/videos/video-29.mp4'],
            ['title' => 'Firefighters Respond to Emergency Call', 'description' => 'A crew of firefighters races to respond to an emergency call across town.', 'url' => 'https://cdn.example.test/testing/videos/video-30.mp4'],
            ['title' => 'Dolphins Leap Alongside Fishing Boat', 'description' => 'A pod of dolphins leaps and dives in the wake of a slow-moving fishing boat.', 'url' => 'https://cdn.example.test/testing/videos/video-31.mp4'],
            ['title' => 'Siblings Build Blanket Fort in Bedroom', 'description' => 'Two siblings stack cushions and blankets to build an elaborate indoor fort.', 'url' => 'https://cdn.example.test/testing/videos/video-32.mp4'],
            ['title' => 'Basketball Player Dunks in Championship Game', 'description' => 'A forward soars above defenders to slam home a dunk in a title decider.', 'url' => 'https://cdn.example.test/testing/videos/video-33.mp4'],
            ['title' => 'Volcano Erupts With Glowing Lava Flow', 'description' => 'A distant volcano erupts, sending a glowing river of lava down its slope.', 'url' => 'https://cdn.example.test/testing/videos/video-34.mp4'],
            ['title' => 'Barista Pours Latte Art in Coffee Shop', 'description' => 'A barista carefully pours steamed milk to create latte art in a busy cafe.', 'url' => 'https://cdn.example.test/testing/videos/video-35.mp4'],
            ['title' => 'Backpacker Hikes Along Cliffside Trail', 'description' => 'A backpacker follows a narrow trail carved into the side of a coastal cliff.', 'url' => 'https://cdn.example.test/testing/videos/video-36.mp4'],
            ['title' => 'DJ Mixes Tracks at Nightclub Booth', 'description' => 'A DJ mixes tracks behind the decks as lights flash across a crowded nightclub.', 'url' => 'https://cdn.example.test/testing/videos/video-37.mp4'],
            ['title' => 'Technician Inspects Solar Panel Array', 'description' => 'A technician inspects rows of solar panels at a large scale solar farm.', 'url' => 'https://cdn.example.test/testing/videos/video-38.mp4'],
            ['title' => 'Fog Rolls Slowly Across Harbour at Dawn', 'description' => 'Thick fog rolls slowly across a quiet harbour as boats sound their horns.', 'url' => 'https://cdn.example.test/testing/videos/video-39.mp4'],
            ['title' => 'Charity Runners Complete City Marathon', 'description' => 'A group of charity runners crosses the finish line together at a city marathon.', 'url' => 'https://cdn.example.test/testing/videos/video-40.mp4'],
            ['title' => 'Red Panda Naps in Tree Branches', 'description' => 'A red panda curls up for an afternoon nap high in the branches of a forest tree.', 'url' => 'https://cdn.example.test/testing/videos/video-41.mp4'],
            ['title' => 'Parents Read Bedtime Story to Children', 'description' => 'A mother reads a picture book aloud to her children tucked into bed.', 'url' => 'https://cdn.example.test/testing/videos/video-42.mp4'],
            ['title' => 'Cyclists Climb Steep Mountain Stage', 'description' => 'A pack of cyclists grinds up a steep switchback climb during a mountain stage.', 'url' => 'https://cdn.example.test/testing/videos/video-43.mp4'],
            ['title' => 'Northern Lights Shimmer Over Snowy Hills', 'description' => 'Green and purple aurora lights ripple across the sky above snow covered hills.', 'url' => 'https://cdn.example.test/testing/videos/video-44.mp4'],
            ['title' => 'Farmer Harvests Ripe Tomatoes at Sunrise', 'description' => 'A farmer picks ripe red tomatoes from the vine as the sun rises over the field.', 'url' => 'https://cdn.example.test/testing/videos/video-45.mp4'],
            ['title' => 'Hot Air Balloons Rise Over Valley', 'description' => 'Dozens of hot air balloons lift off together above a colourful valley at dawn.', 'url' => 'https://cdn.example.test/testing/videos/video-46.mp4'],
            ['title' => 'Choir Sings in Historic Cathedral', 'description' => 'A choir performs a hymn together beneath the arches of an old cathedral.', 'url' => 'https://cdn.example.test/testing/videos/video-47.mp4'],
            ['title' => 'Scientist Examines Sample Under Microscope', 'description' => 'A lab scientist examines a sample closely under a high powered microscope.', 'url' => 'https://cdn.example.test/testing/videos/video-48.mp4'],
            ['title' => 'Rainbow Forms After Sudden Rain Shower', 'description' => 'A vivid rainbow arcs across the sky moments after a sudden rain shower.', 'url' => 'https://cdn.example.test/testing/videos/video-49.mp4'],
            ['title' => 'Town Hall Hosts Local Council Meeting', 'description' => 'Residents gather at the town hall for a public local council meeting.', 'url' => 'https://cdn.example.test/testing/videos/video-50.mp4'],
            ['title' => 'Horses Gallop Through Open Meadow', 'description' => 'Wild horses gallop freely across a wide open meadow under a clear blue sky.', 'url' => 'https://cdn.example.test/testing/videos/video-51.mp4'],
            ['title' => 'Family Reunion Picnic in Local Park', 'description' => 'Three generations gather for a picnic and games at a sunny neighbourhood park.', 'url' => 'https://cdn.example.test/testing/videos/video-52.mp4'],
            ['title' => 'Tennis Player Serves Match Point', 'description' => 'A tennis player tosses the ball and fires a serve to close out a tense final set.', 'url' => 'https://cdn.example.test/testing/videos/video-53.mp4'],
            ['title' => 'Desert Dunes Shift in Strong Wind', 'description' => 'Sand dunes ripple and shift as strong winds sweep across a desert landscape.', 'url' => 'https://cdn.example.test/testing/videos/video-54.mp4'],
            ['title' => 'Sushi Chef Slices Fresh Fish at Counter', 'description' => 'A sushi chef precisely slices fresh fish behind the counter of a busy restaurant.', 'url' => 'https://cdn.example.test/testing/videos/video-55.mp4'],
            ['title' => 'Cable Car Ascends Snowy Mountain Peak', 'description' => 'A cable car climbs a steep cable line toward a snow covered mountain summit.', 'url' => 'https://cdn.example.test/testing/videos/video-56.mp4'],
            ['title' => 'Drummer Rehearses in Garage Band Practice', 'description' => 'A drummer keeps time during a garage band rehearsal with bandmates.', 'url' => 'https://cdn.example.test/testing/videos/video-57.mp4'],
            ['title' => 'Electric Car Charges at Roadside Station', 'description' => 'An electric vehicle charges quietly at a roadside charging station at night.', 'url' => 'https://cdn.example.test/testing/videos/video-58.mp4'],
            ['title' => 'Flood Waters Rise Along River Bank', 'description' => 'Rising flood waters spill slowly over a river bank into nearby fields.', 'url' => 'https://cdn.example.test/testing/videos/video-59.mp4'],
            ['title' => 'Market Traders Set Up Weekend Stalls', 'description' => 'Traders set up colourful stalls early for the weekend farmers market.', 'url' => 'https://cdn.example.test/testing/videos/video-60.mp4'],
            ['title' => 'Penguins Waddle Across Antarctic Ice', 'description' => 'A colony of penguins waddles single file across a stretch of Antarctic sea ice.', 'url' => 'https://cdn.example.test/testing/videos/video-61.mp4'],
            ['title' => 'Dad Teaches Daughter to Ride Bicycle', 'description' => 'A father jogs alongside his daughter as she learns to balance on her bicycle.', 'url' => 'https://cdn.example.test/testing/videos/video-62.mp4'],
            ['title' => 'Gymnast Performs Routine on Balance Beam', 'description' => 'A gymnast executes a tumbling sequence along the balance beam during competition.', 'url' => 'https://cdn.example.test/testing/videos/video-63.mp4'],
            ['title' => 'Coral Reef Teems With Colourful Fish', 'description' => 'Schools of colourful fish weave through a vibrant coral reef underwater.', 'url' => 'https://cdn.example.test/testing/videos/video-64.mp4'],
            ['title' => 'Family Grills Vegetables at Backyard Barbecue', 'description' => 'Family members grill skewered vegetables together at a summer backyard barbecue.', 'url' => 'https://cdn.example.test/testing/videos/video-65.mp4'],
            ['title' => 'Traveller Photographs City Skyline at Dusk', 'description' => 'A traveller captures photos of a glittering city skyline as the sun sets.', 'url' => 'https://cdn.example.test/testing/videos/video-66.mp4'],
            ['title' => 'Pianist Plays Grand Piano on Stage', 'description' => 'A pianist performs a classical piece on a grand piano under stage lights.', 'url' => 'https://cdn.example.test/testing/videos/video-67.mp4'],
            ['title' => '3D Printer Builds Prototype Layer by Layer', 'description' => 'A 3D printer slowly builds up a plastic prototype layer by layer.', 'url' => 'https://cdn.example.test/testing/videos/video-68.mp4'],
            ['title' => 'Hailstorm Batters Rural Farmland', 'description' => 'A sudden hailstorm batters crops and rooftops across open rural farmland.', 'url' => 'https://cdn.example.test/testing/videos/video-69.mp4'],
            ['title' => 'Students Graduate at University Ceremony', 'description' => 'Graduating students cross the stage to receive their diplomas at a ceremony.', 'url' => 'https://cdn.example.test/testing/videos/video-70.mp4'],
            ['title' => 'Owl Takes Flight From Tree Branch', 'description' => 'A barn owl silently lifts off from a tree branch and glides into the night.', 'url' => 'https://cdn.example.test/testing/videos/video-71.mp4'],
            ['title' => 'Family Decorates Christmas Tree Together', 'description' => 'Parents and children hang ornaments and lights on a tree in the living room.', 'url' => 'https://cdn.example.test/testing/videos/video-72.mp4'],
            ['title' => 'Rugby Team Celebrates Last Minute Try', 'description' => 'Players embrace after scoring a match winning try in the final minute.', 'url' => 'https://cdn.example.test/testing/videos/video-73.mp4'],
            ['title' => 'Lightning Strikes During Coastal Thunderstorm', 'description' => 'Forked lightning strikes the sea during a dramatic thunderstorm off the coast.', 'url' => 'https://cdn.example.test/testing/videos/video-74.mp4'],
            ['title' => 'Winemaker Inspects Grapes Before Harvest', 'description' => 'A winemaker walks the vineyard rows, inspecting grapes ahead of the harvest.', 'url' => 'https://cdn.example.test/testing/videos/video-75.mp4'],
            ['title' => 'Camel Caravan Crosses Sahara Dunes', 'description' => 'A line of camels and riders crosses tall dunes deep in the Sahara desert.', 'url' => 'https://cdn.example.test/testing/videos/video-76.mp4'],
            ['title' => 'Crowd Sings Along at Stadium Concert', 'description' => 'Thousands of fans sing along as a band performs at a packed stadium concert.', 'url' => 'https://cdn.example.test/testing/videos/video-77.mp4'],
            ['title' => 'Astronomer Adjusts Telescope at Observatory', 'description' => 'An astronomer adjusts a large telescope inside a mountaintop observatory dome.', 'url' => 'https://cdn.example.test/testing/videos/video-78.mp4'],
            ['title' => 'Frost Coats Fields on Winter Morning', 'description' => 'A layer of frost coats open fields on a cold and still winter morning.', 'url' => 'https://cdn.example.test/testing/videos/video-79.mp4'],
            ['title' => 'Parade Marches Through Town Centre', 'description' => 'A community parade marches down the main street through the town centre.', 'url' => 'https://cdn.example.test/testing/videos/video-80.mp4'],
            ['title' => 'Kittens Explore Cardboard Box Maze', 'description' => 'A litter of kittens cautiously explores a homemade maze built from cardboard boxes.', 'url' => 'https://cdn.example.test/testing/videos/video-81.mp4'],
            ['title' => 'Newborn Baby Meets Older Sibling', 'description' => 'An older brother gently meets his newborn sister for the first time at home.', 'url' => 'https://cdn.example.test/testing/videos/video-82.mp4'],
            ['title' => 'Swimmer Dives Off Starting Blocks', 'description' => 'A swimmer explodes off the starting blocks at the start of a freestyle race.', 'url' => 'https://cdn.example.test/testing/videos/video-83.mp4'],
            ['title' => 'Wildflowers Bloom Across Mountain Meadow', 'description' => 'A carpet of wildflowers blooms across a high altitude mountain meadow.', 'url' => 'https://cdn.example.test/testing/videos/video-84.mp4'],
            ['title' => 'Cheesemaker Turns Wheels in Ageing Cellar', 'description' => 'A cheesemaker turns rows of cheese wheels stored in a cool ageing cellar.', 'url' => 'https://cdn.example.test/testing/videos/video-85.mp4'],
            ['title' => 'Ferry Departs Harbour at First Light', 'description' => 'A passenger ferry pulls away from a quiet harbour as the sun rises.', 'url' => 'https://cdn.example.test/testing/videos/video-86.mp4'],
            ['title' => 'Busker Plays Saxophone on City Street', 'description' => 'A busker plays a soulful saxophone tune on a quiet evening street corner.', 'url' => 'https://cdn.example.test/testing/videos/video-87.mp4'],
            ['title' => 'Server Technician Checks Data Centre Racks', 'description' => 'A technician checks cabling and status lights on racks inside a data centre.', 'url' => 'https://cdn.example.test/testing/videos/video-88.mp4'],
            ['title' => 'Tornado Forms Over Open Prairie', 'description' => 'A funnel cloud touches down and forms a tornado over an open prairie.', 'url' => 'https://cdn.example.test/testing/videos/video-89.mp4'],
            ['title' => 'Food Bank Volunteers Pack Donation Boxes', 'description' => 'Volunteers sort and pack donated food into boxes at a local food bank.', 'url' => 'https://cdn.example.test/testing/videos/video-90.mp4'],
            ['title' => 'Giraffes Graze at Sunset on Reserve', 'description' => 'A pair of giraffes graze on acacia leaves as the sun sets over a wildlife reserve.', 'url' => 'https://cdn.example.test/testing/videos/video-91.mp4'],
            ['title' => 'Multigenerational Family Cooks Sunday Dinner', 'description' => 'Grandmother, parents, and grandchildren prepare a traditional Sunday roast together.', 'url' => 'https://cdn.example.test/testing/videos/video-92.mp4'],
            ['title' => 'Boxer Lands Combination in Title Bout', 'description' => 'A boxer lands a fast combination of punches during a hard fought title bout.', 'url' => 'https://cdn.example.test/testing/videos/video-93.mp4'],
            ['title' => 'Glacier Calves Into Arctic Ocean', 'description' => 'A massive chunk of glacier breaks away and crashes into the Arctic ocean.', 'url' => 'https://cdn.example.test/testing/videos/video-94.mp4'],
            ['title' => 'Market Stall Displays Fresh Seasonal Produce', 'description' => 'A colourful market stall overflows with fresh seasonal fruit and vegetables.', 'url' => 'https://cdn.example.test/testing/videos/video-95.mp4'],
            ['title' => 'Road Trip Convoy Drives Coastal Highway', 'description' => 'A convoy of cars drives along a winding highway that hugs the coastline.', 'url' => 'https://cdn.example.test/testing/videos/video-96.mp4'],
            ['title' => 'Band Records Track in Recording Studio', 'description' => 'A band lays down a new track together inside a professional recording studio.', 'url' => 'https://cdn.example.test/testing/videos/video-97.mp4'],
            ['title' => 'Rocket Launches From Coastal Launchpad', 'description' => 'A rocket lifts off in a plume of smoke from a coastal launch facility.', 'url' => 'https://cdn.example.test/testing/videos/video-98.mp4'],
            ['title' => 'Sunshine Breaks Through Clouds After Storm', 'description' => 'Bright sunshine breaks through parting storm clouds over a calm coastline.', 'url' => 'https://cdn.example.test/testing/videos/video-99.mp4'],
            ['title' => 'Fire Crew Trains With New Rescue Equipment', 'description' => 'A fire crew practises drills with newly issued rescue equipment at the station.', 'url' => 'https://cdn.example.test/testing/videos/video-100.mp4'],
        ];

        foreach ($videos as $video) {
            Video::firstOrCreate(['url' => $video['url']], $video);
        }
    }
}
