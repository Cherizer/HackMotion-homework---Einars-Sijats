<?php
 /**
 * Template Name: HackMotion
 */
$goal = 'Break 80';

if (isset($_GET['goal'])) {
    $param = $_GET['goal'];
    
    if (in_array($param, ['breakpar', 'break80', 'break90', 'break100'])) {
        switch ($param) {
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
    <div class="flex flex-col max-w-[360px] md:max-w-[1440px] w-full">
        <div class="flex items-center mt-[32px] md:mt-0 mx-[16px] md:mx-[95px] gap-[32px] mb-[16px] md:mb-[138px] flex-col md:flex-row ">
            <div class="max-w-[550px] flex flex-col gap-[32px] md:gap-[48px]">
                <p class="ibm-plex-sans-medium text-[24px] md:text-[32px] line-height-130">
                    We have put together a swing improvement solution to help you
                    <font class="text-accent-500"><?php echo $goal; ?></font>
                </p>
                <div class="flex flex-col gap-[48px]">
                    <div class="flex flex-col gap-[12px]">
                        <p class="ibm-plex-sans-regular text-[20px] md:text-[24px] line-height-150">Pack includes:</p>
                        <hr class="horizontal-line"/>
                        <div class="flex flex-col pl-[16px] border-l-4 border-accent-500 gap-[16px]">
                            <p class="ibm-plex-sans-medium text-[20px] md:text-[24px] line-height-130">Swing Analyzer - HackMotion Core</p>
                            <p class="ibm-plex-sans-medium text-[20px] md:text-[24px] line-height-130">Drills by coach Tyler Ferrell</p>
                            <p class="ibm-plex-sans-medium text-[20px] md:text-[24px] line-height-130">Game improvement plan by HackMotion</p>
                        </div>
                    </div>
                    <div>
                        <a class="ibm-plex-sans-medium inline-flex flex-row gap-[8px] text-[14px] md:text-[16px] bg-accent-500 text-white py-[10px] md:py-[16px] px-[16px] md:px-[24px] rounded-[28px] items-center">
                            Start Now
                            <div class="w-[14px] h-[14px] md:w-[24px] md:h-[24px] flex justify-center items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow_forward.svg" alt="Forward Arrow" class="w-[12px] md:w-[15px]" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col gap-[16px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Improvement Graph.png" alt="Improvement Graph" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 4151179.png" alt="Frame" class="hidden md:inline"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Improvement Progress bar.png" alt="Improvement Progress bar" class="inline md:hidden" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 4151178.png" alt="Guaranteed improvement" class="inline md:hidden" />
            </div>
            
        </div>

        <div class="flex flex-col py-[32px] md:py-[64px] px-[16px] md:px-[95px] gap-[16px] md:gap-[72px]">
            <div class="flex flex-col gap-[16px] md:gap-[32px]">
                <p class="ibm-plex-sans-medium text-[32px] md:text-[48px] line-height-130 text-accent-500">The best solution for you: Impact Training Program</p>
                <hr class="horizontal-line"/>
            </div>
            <div class="flex flex-col md:flex-row gap-[32px] md:gap-[48px] w-full">
                <video id="lesson-video" class="w-full h-auto md:max-w-[746px]" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Impact-Drill.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="progress-line-wrapper flex">
                    <div class="progress-line flex w-full bg-white px-[8px] md:px-[5px] rounded-lg justify-start md:justify-center py-[5px] md:py-[8px]">
                        <div id="progress-indicator" class="progress-indicator flex h-[5px] md:h-0 w-0 md:w-[5px] bg-accent-500 rounded-lg"></div>
                    </div>
                </div>
                <div class="flex flex-col gap-[16px] w-full">

                    <div class="card" id="card1">
                        <div class="card-header inline-flex flex-row gap-[4px] items-center" onclick="toggleCard(1)">
                            <div class="w-[24px] h-[24px] flex justify-center items-center">
                                <img id="icon1-collapse" class="toggle-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/expand_less.svg" alt="Expand Less" style="display: none;">
                                <img id="icon1-expand" class="toggle-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/expand_more.svg" alt="Expand More" style="display: inline;">
                            </div>
                            <p class="ibm-plex-sans-medium text-[20px] md:text-[24px] line-height-130 text-accent-500">Static top drill</p>
                        </div>
                        <div class="card-content" id="content1" style="display: none;">
                            <p class="ibm-plex-sans-regular text-[16px] md:text-[20px] line-height-150">Get a feel for the optimal wrist position at Top of your swing</p>
                        </div>
                    </div>

                    <hr class="horizontal-line"/>

                    <div class="card" id="card2">
                        <div class="card-header inline-flex flex-row gap-[4px] items-center" onclick="toggleCard(2)">
                            <div class="w-[24px] h-[24px] flex justify-center items-center">
                                <img id="icon2-collapse" class="toggle-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/expand_less.svg" alt="Expand Less" style="display: none;">
                                <img id="icon2-expand" class="toggle-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/expand_more.svg" alt="Expand More" style="display: inline;">
                            </div>
                            <p class="ibm-plex-sans-medium text-[20px] md:text-[24px] line-height-130 text-accent-500">Dynamic top drill</p>
                        </div>
                        <div class="card-content" id="content2" style="display: none;">
                            <p class="ibm-plex-sans-regular text-[16px] md:text-[20px] line-height-150">Dynamically train your wrist position at Top</p>
                        </div>
                    </div>

                    <hr class="horizontal-line"/>

                    <div class="card" id="card3">
                        <div class="card-header inline-flex flex-row gap-[4px] items-center" onclick="toggleCard(3)">
                            <div class="w-[24px] h-[24px] flex justify-center items-center">
                                <img id="icon3-collapse" class="toggle-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/expand_less.svg" alt="Expand Less" style="display: none;">
                                <img id="icon3-expand" class="toggle-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/expand_more.svg" alt="Expand More" style="display: inline;">
                            </div>
                            <p class="ibm-plex-sans-medium text-[20px] md:text-[24px] line-height-130 text-accent-500">Top full swing challenge</p>
                        </div>
                        <div class="card-content" id="content3" style="display: none;">
                            <p class="ibm-plex-sans-regular text-[16px] md:text-[20px] line-height-150">Train your maximum power swing</p>
                        </div>
                    </div>

                    <hr class="horizontal-line"/>
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
