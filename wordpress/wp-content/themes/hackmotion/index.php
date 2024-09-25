<?php
$goal = 'Break 80';

if (isset($_GET['goal'])) {
    $goal = $_GET['goal'];
    
    if (in_array($goal, ['breakpar', 'break80', 'break90', 'break100'])) {
        switch ($goal) {
            case 'breakpar':
                $goal = 'Break Par';
                break;
            case 'break80':
                $goal = 'Break 80';
                break;
            case 'break90':
                $goal = 'Break 90';
                break;
            case 'break100':
                $goal = 'Break 100';
                break;
        }
    }
}
?>


<?php get_header(); ?>

<div id="main-content" class="flex w-full justify-center">
    <div class="flex flex-col max-w-[1440px]">
        <div class="flex justify-center items-center ml-[95px] gap-[32px] mb-[138px]">
            <div class="max-w-[550px] flex flex-col gap-[48px]">
                <p class="ibm-plex-sans-medium text-[32px] line-height-130">
                    We have put together a swing improvement solution to help you
                    <font class="text-accent-500"><?php echo $goal; ?></font>
                </p>
                <div class="flex flex-col gap-[48px]">
                    <div class="flex flex-col gap-[12px]">
                        <p class="ibm-plex-sans-regular text-[24px] line-height-150">Pack includes:</p>
                        <hr class="horizontal-line"/>
                        <div class="flex flex-col pl-[16px] border-l-4 border-accent-500 gap-[16px]">
                            <p class="ibm-plex-sans-medium text-[24px] line-height-130">Swing Analyzer - HackMotion Core</p>
                            <p class="ibm-plex-sans-medium text-[24px] line-height-130">Drills by coach Tyler Ferrell</p>
                            <p class="ibm-plex-sans-medium text-[24px] line-height-130">Game improvement plan by HackMotion</p>
                        </div>
                    </div>
                    <div>
                        <a class="ibm-plex-sans-medium inline-flex flex-row gap-[8px] text-[16px] bg-accent-500 text-white py-[16px] px-[24px] rounded-[28px]">
                            Start Now
                            <div class="w-[24px] h-[24px] flex justify-center items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow_forward.svg" alt="Forward Arrow" width="15" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col gap-[16px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Improvement Graph.png" alt="Improvement Graph" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 4151179.png" alt="Frame" />
            </div>
            
        </div>

        <div class="flex flex-col bg-bubble-gum py-[64px] px-[95px] gap-[72px]">
            <div class="flex flex-col gap-[32px]">
                <p class="ibm-plex-sans-medium text-[48px] line-height-130 text-accent-500">The best solution for you: Impact Training Program</p>
                <hr class="horizontal-line"/>
            </div>
            <div class="flex flex-row gap-[48px]">
                <video width="746" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Impact-Drill.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="flex flex-col pl-[16px] border-l-4 border-accent-500 gap-[16px]">
                    <p class="ibm-plex-sans-medium text-[24px] line-height-130">Swing Analyzer - HackMotion Core</p>
                    <p class="ibm-plex-sans-medium text-[24px] line-height-130">Drills by coach Tyler Ferrell</p>
                    <p class="ibm-plex-sans-medium text-[24px] line-height-130">Game improvement plan by HackMotion</p>
                </div>
            </div>
        </div>
    </div>

    
    
    
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
