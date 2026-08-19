<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'IT Infrastructure Management',
                'short_description' => 'End-to-end management of your servers, networks, and IT systems, keeping your infrastructure reliable and up to date.',
                'long_description' => '<p>We manage the full lifecycle of your IT infrastructure, from servers and storage to networking hardware, so your business runs on a stable and well-maintained foundation. Instead of reacting to failures after they happen, our team continuously monitors performance, tracks capacity, and plans upgrades well before ageing equipment or growing demand becomes a problem.</p><p>Every environment is different, so we start by mapping out your existing infrastructure, identifying single points of failure, and documenting how your systems fit together. From there, we build a maintenance schedule that keeps firmware, drivers, and configurations current without disrupting your working day.</p><p>As your business grows, we scale your infrastructure alongside it, recommending upgrades or consolidations only when they genuinely deliver value. You get a technology partner who treats your infrastructure as the backbone of your operations, not just a list of assets to patch.</p>',
                'includes' => [
                    'Server and storage management',
                    'Infrastructure monitoring and reporting',
                    'Capacity planning and upgrades',
                    'Vendor and licensing coordination',
                ],
                'is_feature' => true,
            ],
            [
                'title' => 'Cloud Services',
                'short_description' => 'Migration, management, and optimization of cloud environments so your business scales without unnecessary cost or complexity.',
                'long_description' => '<p>Whether you are moving to the cloud for the first time or optimizing an existing setup, we help design, migrate, and manage cloud environments that fit your business needs. We focus on reliability, security, and cost control across every stage of your cloud journey, not just the initial migration.</p><p>Our team assesses your current workloads to decide what genuinely belongs in the cloud, what should stay on-premises, and where a hybrid approach makes the most sense. Migrations are planned around your business hours to minimize downtime, with rollback plans in place in case anything needs adjusting.</p><p>Once you are live, we keep watching. Cloud spend has a habit of creeping up unnoticed, so we regularly review your usage, right-size resources, and flag opportunities to cut costs without sacrificing performance or resilience.</p>',
                'includes' => [
                    'Cloud migration planning and execution',
                    'Cost optimization and right-sizing',
                    'Multi-cloud and hybrid setup support',
                    'Ongoing cloud infrastructure management',
                ],
                'is_feature' => true,
            ],
            [
                'title' => 'Technical Support & Helpdesk',
                'short_description' => 'Fast, friendly technical support for everyday issues, with most requests resolved remotely the same day.',
                'long_description' => '<p>Our helpdesk gives your team a single point of contact for any IT issue, big or small. From password resets to software troubleshooting, most requests are picked up within minutes and resolved remotely the same day, so your staff spend less time waiting and more time working.</p><p>Every ticket is logged, tracked, and prioritized, so nothing falls through the cracks and you always have visibility into what is being worked on. If an issue needs specialist attention, it is escalated internally to the right team without you having to chase anyone down.</p><p>Beyond fixing the immediate problem, we look for patterns. Recurring issues are flagged and addressed at the root cause, so your team spends less time raising the same ticket over and over and more time getting on with their work.</p>',
                'includes' => [
                    'Unlimited remote helpdesk support',
                    'Fast response times',
                    'Ticket tracking and resolution updates',
                    'Escalation to specialist teams when needed',
                ],
                'is_feature' => true,
            ],
            [
                'title' => 'System Administration',
                'short_description' => 'Day-to-day administration of your servers, user accounts, and core business systems.',
                'long_description' => '<p>We take care of the routine but critical work of keeping your systems running, from user account management to system updates, so your internal IT environment stays secure, organized, and dependable day to day.</p><p>That includes provisioning and deprovisioning accounts as staff join or leave, applying updates and patches on a predictable schedule, and keeping an eye on server health so small issues get caught before they turn into outages.</p><p>We also document everything we touch. Configurations, access permissions, and system changes are recorded clearly, so there is never a single point of knowledge locked away with one person, and your systems stay auditable and easy to hand over if needed.</p>',
                'includes' => [
                    'User and access account management',
                    'System updates and patch management',
                    'Server health checks',
                    'Documentation of system configurations',
                ],
                'is_feature' => true,
            ],
            [
                'title' => 'Cybersecurity Services',
                'short_description' => 'Firewalls, endpoint protection, and staff security training to keep your business protected against evolving threats.',
                'long_description' => '<p>We protect your business with a layered approach to cybersecurity, combining firewalls and endpoint protection with staff awareness training, because most breaches start with a person, not a piece of software. Our goal is to reduce risk and respond quickly if something does go wrong.</p><p>We start by assessing where your business is most exposed, whether that is outdated software, weak access controls, or a lack of staff awareness around phishing and social engineering. From there we put practical protections in place that fit your budget and your risk level, rather than selling you every tool available.</p><p>Security is never a one-off project, so we monitor continuously, keep protections updated as threats evolve, and make sure you have a clear incident response plan ready, so if something slips through, your team knows exactly what to do next.</p>',
                'includes' => [
                    'Firewall and endpoint protection',
                    'Security monitoring and alerting',
                    'Staff security awareness training',
                    'Incident response planning',
                ],
                'is_feature' => true,
            ],
            [
                'title' => 'Virtualization & Backup',
                'short_description' => 'Automated backups and virtualization solutions that keep your data safe and your systems flexible.',
                'long_description' => '<p>We design and manage virtualized environments and backup systems that protect your business from data loss and downtime, with disaster recovery planning built in from the start rather than added on afterwards.</p><p>Virtualization lets you get more out of your existing hardware while making it far easier to recover quickly if a server fails, and we configure it in a way that matches how your business actually operates, not a generic template.</p><p>Backups are only useful if they actually work when you need them, so we schedule automated backups and test them regularly, giving you confidence that your data can be restored quickly, whether you are recovering a single file or an entire system.</p>',
                'includes' => [
                    'Server virtualization setup and management',
                    'Automated backup scheduling',
                    'Disaster recovery planning',
                    'Regular backup testing and verification',
                ],
                'is_feature' => false,
            ],
            [
                'title' => 'Cloud Collaboration Tools',
                'short_description' => 'Setup, migration, and support for the email, file-sharing, and collaboration tools your team relies on every day.',
                'long_description' => '<p>We help your team get the most out of collaboration platforms like Microsoft 365 and Google Workspace, handling setup, migration, and ongoing support so everyone stays connected and productive without wrestling with the tools themselves.</p><p>Moving between platforms, or setting one up for the first time, can be disruptive if it is not planned properly. We manage the migration of mailboxes, files, and permissions carefully, so your team keeps working with minimal interruption.</p><p>Once you are set up, we provide ongoing administration and support, from managing licenses and permissions to helping staff get comfortable with shared drives, video calls, and document collaboration, so the tools actually get used the way they were intended.</p>',
                'includes' => [
                    'Email and file-sharing setup',
                    'Migration between platforms',
                    'User training and onboarding',
                    'Ongoing platform administration',
                ],
                'is_feature' => false,
            ],
            [
                'title' => 'Project Management',
                'short_description' => 'Structured planning and delivery for IT projects, from small rollouts to full office moves and system upgrades.',
                'long_description' => '<p>Our project managers plan and coordinate your IT initiatives from start to finish, keeping stakeholders informed and minimizing disruption to your day-to-day operations, whatever the size of the project.</p><p>Every project starts with clear scoping, so everyone agrees on what is being delivered, by when, and what success looks like before any work begins. That upfront clarity avoids the scope creep and miscommunication that derail so many IT initiatives.</p><p>Throughout delivery, we manage risks, timelines, and vendors on your behalf, giving you regular updates in plain language rather than technical jargon. Once a project is complete, we carry out a proper handover and review, so your team knows exactly how everything works.</p>',
                'includes' => [
                    'Project planning and scoping',
                    'Stakeholder communication',
                    'Risk and timeline management',
                    'Post-project review and handover',
                ],
                'is_feature' => false,
            ],
            [
                'title' => 'Hardware & Peripheral Support',
                'short_description' => 'Sourcing, setup, and repair of laptops, desktops, and office equipment, keeping your business running without downtime.',
                'long_description' => '<p>From procurement to repair, we manage the hardware your business depends on, so equipment issues are resolved quickly and your team always has the tools they need to get on with their work.</p><p>We source and configure laptops, desktops, and office equipment on your behalf, taking care of warranty registration and setup so new devices are ready to use the moment they arrive, not sitting in a box waiting for IT attention.</p><p>When something breaks, we handle the repair process end to end, including manufacturer warranty coordination where applicable, and we keep a record of your hardware assets so replacements and upgrades can be planned ahead of time rather than as an emergency.</p>',
                'includes' => [
                    'Hardware sourcing and procurement',
                    'Setup and configuration',
                    'Repair and warranty coordination',
                    'Asset tracking and lifecycle management',
                ],
                'is_feature' => false,
            ],
            [
                'title' => 'Hospitality IT Solutions',
                'short_description' => 'Tailored IT support for hotels, restaurants, and hospitality businesses, covering guest and back-office systems.',
                'long_description' => '<p>We understand the unique demands of hospitality environments, supporting guest-facing Wi-Fi, POS systems, and back-office technology so operations run smoothly around the clock, even outside normal business hours.</p><p>Guests expect fast, reliable Wi-Fi and a seamless booking or payment experience, and any downtime in a hotel or restaurant is highly visible and directly affects revenue. We design and support these guest-facing systems with that pressure in mind.</p><p>Behind the scenes, we also keep your back-office systems, from reservations to inventory, running reliably, with support available when your business needs it, including evenings and weekends when many hospitality operations are at their busiest.</p>',
                'includes' => [
                    'Guest Wi-Fi setup and support',
                    'POS and booking system support',
                    'Back-office IT management',
                    '24/7 availability for critical issues',
                ],
                'is_feature' => false,
            ],
            [
                'title' => 'Automation & Workflow Optimization',
                'short_description' => 'Streamlining repetitive tasks and business processes with automation tools tailored to your workflow.',
                'long_description' => '<p>We identify manual, repetitive tasks in your business and implement automation solutions that save time, reduce errors, and free your team to focus on higher-value work instead of repetitive admin.</p><p>We start by looking at how work actually moves through your business, spotting the manual handoffs, duplicate data entry, and repetitive approvals that quietly eat up hours every week. From there, we design automation that fits into your existing tools rather than forcing you to change how you work.</p><p>Once automation is in place, we do not just walk away. We monitor how it performs, make adjustments as your processes evolve, and look for the next opportunity to remove friction from your day-to-day operations.</p>',
                'includes' => [
                    'Workflow assessment and analysis',
                    'Process automation implementation',
                    'Integration between business tools',
                    'Ongoing optimization and support',
                ],
                'is_feature' => false,
            ],
            [
                'title' => 'Software & Application Management',
                'short_description' => 'Deployment, licensing, and ongoing support for the business software and applications your team uses.',
                'long_description' => '<p>We manage the software your business relies on, from deployment and licensing to updates and troubleshooting, keeping your applications running smoothly and compliant with vendor requirements.</p><p>New software is deployed and configured consistently across your team, so everyone is working from the same setup and you are not left chasing missing licenses or mismatched versions further down the line.</p><p>We also keep track of renewals and license usage, so you are never paying for seats you do not need, and when something stops working as expected, our team is on hand to troubleshoot and get your applications back to normal quickly.</p>',
                'includes' => [
                    'Software deployment and configuration',
                    'License management and compliance',
                    'Application updates and patching',
                    'User support and troubleshooting',
                ],
                'is_feature' => false,
            ],
            [
                'title' => 'Training & Onboarding',
                'short_description' => 'Hands-on training and onboarding support to help your team get the most out of your technology.',
                'long_description' => '<p>We provide practical, jargon-free training for new employees and new systems alike, helping your team adopt technology confidently and reducing the burden on internal staff who would otherwise have to cover it themselves.</p><p>When a new employee joins, we make sure they have working access to everything they need from day one, along with a straightforward walkthrough of the systems and tools they will be using, so they can be productive quickly rather than spending their first week figuring things out.</p><p>The same approach applies whenever you roll out new software or change a process. We provide hands-on training, simple documentation your team can refer back to later, and refresher sessions when needed, so adoption sticks rather than fading after the initial rollout.</p>',
                'includes' => [
                    'New employee IT onboarding',
                    'Software and systems training',
                    'Documentation and quick-reference guides',
                    'Ongoing refresher sessions',
                ],
                'is_feature' => false,
            ],
            [
                'title' => 'Network Administration & Security',
                'short_description' => 'Design, installation, and ongoing support for wired and wireless networks that keep your team connected and secure.',
                'long_description' => '<p>We build and maintain networks that are fast, reliable, and secure, covering everything from initial design and installation to ongoing monitoring and troubleshooting, so your team stays connected without interruption.</p><p>A well-designed network is invisible when it works and disruptive when it does not, so we plan wired and wireless coverage around how your office is actually used, avoiding the dead zones and bottlenecks that come from bolting on access points as an afterthought.</p><p>Security is built into the network itself, not added on top, with proper segmentation and access controls in place from the start. We monitor performance continuously and step in quickly whenever something needs attention, so issues get resolved before your team even notices them.</p>',
                'includes' => [
                    'Network design and installation',
                    'Wired and wireless configuration',
                    'Network security and access control',
                    'Ongoing monitoring and support',
                ],
                'is_feature' => true,
            ],
            [
                'title' => 'Web Development Services',
                'short_description' => 'Design, development, and maintenance of business websites that are fast, secure, and easy to manage.',
                'long_description' => '<p>We design and build websites that represent your business well and are easy to maintain, from small business sites to more complex web applications, with ongoing support available long after launch.</p><p>Every site is built with performance and security in mind from the start, using a content management system that lets your team make everyday updates without needing to call a developer for every small change.</p><p>Launch day is not the finish line. We continue to monitor performance, apply updates, and harden your site against emerging security issues, so your website stays fast, safe, and reliable as your business and its needs keep growing.</p>',
                'includes' => [
                    'Website design and development',
                    'Content management system setup',
                    'Website maintenance and updates',
                    'Performance and security hardening',
                ],
                'is_feature' => false,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => Str::slug($service['title'])],
                [
                    'title' => $service['title'],
                    'short_description' => $service['short_description'],
                    'long_description' => $service['long_description'],
                    'includes' => $service['includes'],
                    'is_feature' => $service['is_feature'],
                    'is_active' => true,
                    'meta_title' => $service['title'],
                    'meta_description' => $service['short_description'],
                ]
            );
        }
    }
}
