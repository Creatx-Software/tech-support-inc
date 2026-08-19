<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => '5 Signs Your Business Needs Managed IT Support',
                'category' => 'IT Support Tips',
                'tags' => ['Small Business', 'IT Trends'],
                'author_name' => 'Tech Support Inc Team',
                'date' => '2026-06-02',
                'description' => '<p>Many businesses only start looking for managed IT support after something has already gone wrong, a server crash, a missed deadline caused by slow systems, or a security scare that could have been avoided. Waiting for a crisis is an expensive way to learn that your IT setup has outgrown what your team can handle in-house.</p><p>If your staff are spending more time troubleshooting than working, if the same issues keep coming back without ever being properly resolved, or if you simply do not know how well protected your systems really are, these are all signs it is time for outside help. Growing businesses in particular often reach a point where ad-hoc fixes stop being enough.</p><p>Managed IT support gives you a proactive partner instead of a reactive fix. Issues get caught before they become outages, systems are monitored around the clock, and your team gets to focus on the work that actually grows the business, rather than fighting with technology that should just work.</p>',
                'is_feature' => true,
            ],
            [
                'title' => 'Ransomware in 2026: What Small Businesses Need to Know',
                'category' => 'Cybersecurity',
                'tags' => ['Cybersecurity', 'Ransomware', 'Small Business'],
                'author_name' => 'Tech Support Inc Team',
                'date' => '2026-05-14',
                'description' => '<p>Ransomware attacks have not slowed down, and small businesses remain a favourite target because attackers assume, often correctly, that defences are weaker and recovery options are limited. A single successful attack can halt operations for days and cost far more than the ransom itself.</p><p>Modern ransomware rarely arrives as an obvious threat. It is usually delivered through a convincing phishing email, a compromised login, or an unpatched piece of software sitting quietly on your network. Once inside, it can spread quickly, encrypting files and demanding payment before you even know what happened.</p><p>The best defence combines layered technical protection, endpoint security, patched systems, and monitored backups, with staff who know how to spot a suspicious email before they click it. Businesses that also test their backups regularly and have a clear incident response plan recover in hours instead of weeks.</p>',
                'is_feature' => true,
            ],
            [
                'title' => 'Migrating to the Cloud: A Practical Checklist',
                'category' => 'Cloud Computing',
                'tags' => ['Cloud Migration', 'IT Trends'],
                'author_name' => 'Tech Support Inc Team',
                'date' => '2026-04-28',
                'description' => '<p>Cloud migration promises flexibility and lower overhead, but a rushed move can lead to unexpected downtime, ballooning costs, or data that ends up scattered across platforms with no clear ownership. A little planning up front saves a lot of cleanup later.</p><p>Start by auditing what you actually have: which applications are business-critical, which data needs to move first, and which systems could just as easily be retired instead of migrated. Not everything belongs in the cloud, and a hybrid approach is often the right answer rather than an all-or-nothing shift.</p><p>Once you know what is moving, plan the migration itself around your busiest hours, not despite them. Schedule cutovers for quiet periods, keep a rollback plan ready, and confirm backups are working in the new environment before you consider the migration complete.</p>',
                'is_feature' => false,
            ],
            [
                'title' => 'How to Spot a Phishing Email Before It Costs You',
                'category' => 'Cybersecurity',
                'tags' => ['Cybersecurity', 'Helpdesk'],
                'author_name' => 'Tech Support Inc Team',
                'date' => '2026-04-10',
                'description' => '<p>Phishing remains the most common way attackers get into a business, not because the technology is sophisticated, but because it targets people rather than systems. A well-crafted email can bypass every firewall you have simply by convincing someone to click.</p><p>The warning signs are often subtle: a sender address that is almost right, an unexpected request for payment or login details, or a tone of urgency designed to stop you thinking twice. Attackers count on you being busy and reacting quickly rather than reading carefully.</p><p>The best protection is a habit, not a single check. Hover over links before clicking, verify unusual requests through a second channel, and report anything suspicious to your IT team rather than deleting it quietly. One reported email can help protect the rest of the business.</p>',
                'is_feature' => false,
            ],
            [
                'title' => 'Remote Work Security: Protecting Your Team Outside the Office',
                'category' => 'Cybersecurity',
                'tags' => ['Remote Work', 'Cybersecurity', 'Networking'],
                'author_name' => 'Tech Support Inc Team',
                'date' => '2026-03-22',
                'description' => '<p>Remote and hybrid work are here to stay, but every laptop that leaves the office, and every home network it connects to, is a potential gap in your security if it is not properly managed. The office firewall cannot protect a device that is never behind it.</p><p>Secure remote work starts with the basics: company devices with up-to-date protection, multi-factor authentication on every login, and a VPN or zero-trust setup so traffic stays protected regardless of network. Personal devices used for work need the same scrutiny, not an exception.</p><p>Just as important is making sure remote staff know what to do when something looks wrong, whether that is a suspicious email or a device that has been lost or stolen. Clear policies and a quick response process keep a single incident from becoming a bigger breach.</p>',
                'is_feature' => false,
            ],
            [
                'title' => 'Backup vs Disaster Recovery: What Is the Difference?',
                'category' => 'IT Support Tips',
                'tags' => ['Data Backup', 'Disaster Recovery'],
                'author_name' => 'Tech Support Inc Team',
                'date' => '2026-03-05',
                'description' => '<p>Backup and disaster recovery are often used interchangeably, but they solve different problems. A backup is a copy of your data. Disaster recovery is the plan and infrastructure that gets your entire business back online after something goes seriously wrong.</p><p>Having backups means you can restore a deleted file or a corrupted database. It does not necessarily mean you can get your business running again quickly if a server fails, an office floods, or ransomware takes down your whole network at once. That is where disaster recovery comes in.</p><p>A proper disaster recovery plan defines how fast systems need to be restored, in what order, and who is responsible for each step. Backups are the raw material; disaster recovery is the tested process that turns them into a working business again, quickly and with minimal disruption.</p>',
                'is_feature' => false,
            ],
            [
                'title' => 'Getting the Most Out of Microsoft 365 for Your Team',
                'category' => 'Cloud Computing',
                'tags' => ['Microsoft 365', 'Automation'],
                'author_name' => 'Tech Support Inc Team',
                'date' => '2026-02-18',
                'description' => '<p>Most businesses use a fraction of what Microsoft 365 actually offers, sticking to email and a shared drive while paying for tools that could save hours every week if they were properly set up and adopted by the team.</p><p>Beyond the basics, features like shared calendars, Teams channels organized by project, and automated workflows in Power Automate can remove a lot of the manual coordination that eats into a working day. The tools are already included; they just need configuring around how your team actually works.</p><p>Getting real value out of the platform is less about turning on every feature and more about training staff to use the handful that matter most for your business, then reviewing licenses regularly so you are only paying for what people actually use.</p>',
                'is_feature' => false,
            ],
            [
                'title' => 'Wired vs Wireless: Choosing the Right Network Setup for Your Office',
                'category' => 'Networking',
                'tags' => ['Networking', 'Small Business'],
                'author_name' => 'Tech Support Inc Team',
                'date' => '2026-01-30',
                'description' => '<p>Wireless networking has become the default in most offices, but that does not mean it is always the right call for every device or every space. Choosing between wired and wireless connections should come down to what each part of your office actually needs.</p><p>Wired connections still win for reliability and speed where it matters most, servers, desktop workstations, and anything sensitive to latency. Wireless offers the flexibility staff expect for laptops, phones, and meeting rooms, but only if access points are planned properly rather than added wherever a signal happens to reach.</p><p>The best office networks usually combine both, using wired connections as the reliable backbone and wireless for flexibility on top of it, with security and segmentation built in from the start rather than bolted on afterwards.</p>',
                'is_feature' => false,
            ],
        ];

        foreach ($posts as $post) {
            $category = BlogCategory::where('slug', Str::slug($post['category']))->first();

            $blog = Blog::updateOrCreate(
                ['slug' => Str::slug($post['title'])],
                [
                    'title' => $post['title'],
                    'blog_category_id' => $category?->id,
                    'author_name' => $post['author_name'],
                    'date' => $post['date'],
                    'description' => $post['description'],
                    'is_feature' => $post['is_feature'],
                    'is_active' => true,
                    'meta_title' => $post['title'],
                    'meta_description' => Str::limit(strip_tags($post['description']), 160),
                    'meta_keywords' => implode(', ', $post['tags']),
                ]
            );

            $tagIds = BlogTag::whereIn('slug', array_map(fn ($tag) => Str::slug($tag), $post['tags']))
                ->pluck('id');

            $blog->tags()->sync($tagIds);
        }
    }
}
