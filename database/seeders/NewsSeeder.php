<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsData = [
            [
                'title' => 'New Technology Revolutionizes Renewable Energy',
                'content' => 'The renewable energy sector is undergoing a significant transformation with the introduction of a new technology that promises to improve efficiency and reduce costs. Developed by a team of scientists at the GreenTech Institute, this innovative solution utilizes advanced materials and algorithms to optimize energy conversion rates. Unlike traditional systems that rely heavily on weather conditions, this technology can adjust to varying environmental factors, ensuring consistent performance. Experts predict that this breakthrough will accelerate the adoption of renewable energy sources worldwide, particularly in areas that have previously struggled with resource availability. The system’s ability to store and distribute energy efficiently makes it a game-changer for both urban and rural settings. Furthermore, the technology’s scalability means it can be deployed in small communities as well as large industrial complexes. Government officials and industry leaders have already expressed interest in implementing pilot projects to test the technology’s capabilities. If successful, these projects could pave the way for a more sustainable and eco-friendly future. The team at GreenTech Institute is hopeful that their invention will contribute significantly to the global efforts in combating climate change and reducing dependence on fossil fuels.'
            ],
            [
                'title' => 'Local Community Garden Wins National Award',
                'content' => 'A local community garden in Springfield has been recognized with a prestigious national award for its contributions to sustainability and community engagement. The Springfield Green Garden, established in 2010, has grown from a small plot of land into a thriving green space that benefits hundreds of local residents. Managed by volunteers and funded by local donations, the garden offers a variety of programs and activities that promote environmental education and healthy living. The garden’s unique approach to sustainable agriculture has not only provided fresh produce to the community but also served as a learning hub for schools and organizations. Regular workshops on composting, organic farming, and water conservation are held throughout the year, attracting participants of all ages. The garden also hosts seasonal events, including harvest festivals and tree planting days, which foster a sense of community among participants. The national award recognizes the garden’s innovative practices and its role in promoting environmental stewardship. The Springfield Green Garden plans to use the prize money to expand its facilities and introduce new programs aimed at increasing community involvement. With a growing number of visitors each year, the garden continues to inspire other communities to embrace sustainable practices and strengthen their local ecosystems.'
            ],
            [
                'title' => 'City Launches New Public Transportation Initiative',
                'content' => 'In an effort to reduce traffic congestion and promote eco-friendly commuting, the city council has launched a new public transportation initiative. The project, named "Go Green Transit," aims to provide affordable and convenient transportation options for all city residents. The initiative includes the introduction of electric buses, expanded bike-sharing programs, and the development of new walking paths and cycling lanes. According to city officials, the primary goal of the initiative is to decrease the number of cars on the road and reduce carbon emissions. By offering more sustainable transportation choices, the city hopes to encourage residents to leave their cars at home and opt for greener alternatives. The electric buses, which are scheduled to be deployed next month, will operate on major routes throughout the city, providing a clean and efficient way to travel. The "Go Green Transit" initiative also includes educational campaigns and incentives for residents who choose to use eco-friendly transportation. These incentives include discounted fares, rewards programs, and free bike helmets for participants. The city council believes that this comprehensive approach will not only improve the quality of life for residents but also set a positive example for other cities to follow.'
            ],
            [
                'title' => 'New Art Exhibition Showcases Local Talent',
                'content' => 'The city’s art community is buzzing with excitement as a new exhibition showcasing the works of local artists opens at the downtown gallery. Titled "Expressions of the City," the exhibition features a diverse collection of paintings, sculptures, and mixed media pieces that reflect the unique perspectives of the artists. The gallery’s curator, Maria Johnson, expressed her enthusiasm about the exhibition, stating that it provides a platform for artists to share their creativity with a wider audience. Visitors to the exhibition can expect to see a variety of styles and themes, ranging from abstract expressions to realistic depictions of city life. One of the highlights of the exhibition is a series of paintings by renowned local artist, John Doe, which captures the vibrancy and energy of the city’s streets. Additionally, several emerging artists are making their debut at the exhibition, bringing fresh and innovative ideas to the forefront. The exhibition will run for the next two months, with various events and workshops scheduled throughout the duration. These events include artist talks, live painting sessions, and interactive workshops that encourage visitors to explore their own creativity. The gallery hopes that "Expressions of the City" will not only inspire local artists but also foster a greater appreciation for the arts within the community.'
            ],
            [
                'title' => 'Local School Implements Innovative Learning Program',
                'content' => 'A local elementary school has implemented a new learning program aimed at enhancing student engagement and academic performance. The program, known as "Learning Beyond the Classroom," integrates technology and hands-on activities to create a dynamic and interactive learning environment. Principal Susan Smith stated that the goal of the program is to provide students with the tools and resources they need to succeed in an increasingly digital world. The program features a variety of components, including virtual field trips, interactive lessons, and project-based learning activities. Students are encouraged to explore topics that interest them and to collaborate with their peers on group projects. Teachers act as facilitators, guiding students through the learning process and providing support and feedback along the way. Since the implementation of the program, the school has seen a noticeable increase in student motivation and participation. Parents have also praised the program, noting that their children are more excited about learning and are developing important skills such as critical thinking and problem-solving. The school plans to expand the program to include more grade levels and to introduce additional activities and resources in the future.'
            ]
        ];

        foreach ($newsData as $news) {
            DB::table('news')->insert($news);
        }
    }
}
