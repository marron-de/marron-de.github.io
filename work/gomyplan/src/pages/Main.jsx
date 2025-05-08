import styled from "styled-components";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import CustomCalendar from "../components/CustomCalendar";
import SmallButton from "../components/SmallButton";

// Swiper
import { Swiper, SwiperSlide } from "swiper/react";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// img
import M1Img1 from "../assets/img/main1_img1.png";
import M1Img2 from "../assets/img/main1_img2.png";
import M1Img3 from "../assets/img/main1_img3.png";

import M2Img1 from "../assets/img/main2_icon1.png";
import M2Img2 from "../assets/img/main2_icon2.png";
import M2Img3 from "../assets/img/main2_icon3.png";

import M3Img1 from "../assets/img/main3_img1.png";
import M3Img2 from "../assets/img/main3_img2.png";
import M3Img3 from "../assets/img/main3_img3.png";
import M3Img4 from "../assets/img/main3_img4.png";
import M3Img5 from "../assets/img/main3_img5.png";

import M4Img1 from "../assets/img/main4_img1.png";
import M4Img2 from "../assets/img/main4_img2.png";
import M4Img3 from "../assets/img/main4_img3.png";
import M4Img4 from "../assets/img/main4_img4.png";
import M4Img5 from "../assets/img/main4_img5.png";

import M5Img1 from "../assets/img/main5_banner1.jpg";
import M5Img2 from "../assets/img/main5_banner2.jpg";
import M5Left from "../assets/img/slider_left.png";
import M5Right from "../assets/img/slider_right.png";

import M6Img1 from "../assets/img/main6_img1.png";
import M6Img2 from "../assets/img/main4_img2.png";
import M6Img3 from "../assets/img/main4_img3.png";
import M6Img4 from "../assets/img/main4_img4.png";
import M6Img5 from "../assets/img/main4_img5.png";

// style
const PageContainer = styled.div`
  padding-top: 30px;
  padding-bottom: 40px;
`;

const MainTilte = styled.h1`
  padding: 0 20px;
  font-family: var(--second-family);
  font-weight: 700;
  font-size: 18px;
  line-height: 130%;
  color: var(--color-default);
  margin-bottom: 20px;
  transition: var(--transition);

  span {
    background: linear-gradient(90deg, #ffbb12 0%, #fc8b0d 100%);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .darkMode & {
    color: var(--color-white);
  }
`;

const MainInputBox = styled.div`
  padding: 0 20px;
  margin-bottom: 20px;
`;

const MainSection = styled.div`
  margin-bottom: 40px;

  &.banner {
    padding: 20px 0 10px;
  }
`;

const Main1Swiper = styled.div`
  .swiper {
    width: 100%;
  }

  .swiper .swiper-wrapper {
    padding: 0 0 30px;
  }

  .swiper .swiper-slide {
    border-radius: 10px;
    padding: 8px 8px 18px 8px;
    max-width: 166px;
    box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
    background: var(--color-white);
    display: flex;
    flex-direction: column;
    gap: 12px;
    transition: var(--transition);
  }

  .darkMode & .swiper .swiper-slide {
    background: var(--color-darkgray2);
  }

  .swiper .swiper-slide:nth-child(1) {
    margin-left: 20px;
  }

  .swiper .swiper-slide:last-child {
    margin-right: 20px;
  }
`;

const M1_TxtBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 2px;
`;

const M1_Title = styled.p`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-input);
  }
`;

const M1_Desc = styled.p`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const Main2Swiper = styled.div`
  padding: 0 20px;

  .swiper {
    width: 100%;
    max-width: 400px;
    border-radius: 10px;
    box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
    background: var(--color-white);
  }

  .swiper .swiper-slide {
    transition: var(--transition);
    background: var(--color-white);
    padding: 20px 24px;
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 140px;
  }

  .darkMode & .swiper .swiper-slide {
    background: var(--color-darkgray2);
  }
`;

const M2_TxtBox = styled.div`
  flex: 1;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 6px;
`;

const M2_Title = styled.p`
  display: flex;
  flex-direction: column;
  font-family: var(--second-family);
  font-weight: 700;
  font-size: 18px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }

  @media screen and (max-width: 320px) {
    font-size: 16px;
  }
`;

const M2_Num = styled.span`
  transition: var(--transition);
  color: var(--color-main);

  .darkMode & {
    color: var(--color-point);
  }
`;

const M2_Desc = styled.p`
  font-weight: 400;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }

  @media screen and (max-width: 320px) {
    font-size: 12px;
  }
`;

const M2_Icon = styled.img`
  width: 90px;
  aspect-ratio: 1 / 1;

  @media screen and (max-width: 320px) {
    width: 80px;
  }
`;

const Main2Pagination = styled.div`
  position: relative;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 20px;
  transition: var(--transition);

  .swiper-pagination-bullet {
    width: 6px;
    height: 6px;
    border-radius: 50px;
    transition: var(--transition);
    background: var(--color-border);
    opacity: 1;
    margin: 0 !important;
  }

  .swiper-pagination-bullet-active {
    width: 28px;
    background: var(--color-default);
  }

  .darkMode & .swiper-pagination-bullet {
    background: var(--color-white);
  }

  .darkMode & .swiper-pagination-bullet-active {
    background: var(--color-default);
  }
`;

const Main3Swiper = styled.div`
  .swiper {
    width: 100%;
  }

  .swiper .swiper-slide {
    max-width: 150px;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .swiper .swiper-slide:nth-child(1) {
    margin-left: 20px;
  }

  .swiper .swiper-slide:last-child {
    margin-right: 20px;
  }

  .swiper .swiper-slide img {
    border-radius: 10px;
    width: 100%;
    aspect-ratio: 1 / 1;
    box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
    object-fit: cover;
  }
`;

const M3_Title = styled.p`
  font-weight: 400;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const Main4Swiper = styled.div`
  .swiper {
    width: 100%;
  }

  .swiper .swiper-slide {
    max-width: 280px;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .swiper .swiper-slide:nth-child(1) {
    margin-left: 20px;
  }

  .swiper .swiper-slide:last-child {
    margin-right: 20px;
  }

  .swiper .swiper-slide img {
    border-radius: 10px;
    width: 100%;
    aspect-ratio: 1 / 0.5714285;
    box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
    object-fit: cover;
  }
`;

const Main5Swiper = styled.div`
  .swiper {
    width: 100%;
    box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  }

  .swiper .swiper-slide {
    display: flex;
  }

  .swiper-button-prev,
  .swiper-button-next {
    width: 24px;
    height: auto;
    aspect-ratio: 1 / 1;
    display: flex;
    background: no-repeat center / contain;
    margin: 0;
    transform: translateY(-50%);
  }

  .swiper-button-prev {
    background-image: url(${M5Left});
  }

  .swiper-button-next {
    background-image: url(${M5Right});
  }
`;

const Main = () => {
  return (
    <>
      {/* Header */}
      <Header type="logo" />

      {/* contents */}
      <PageContainer className="container">
        <MainSection>
          <MainTilte>
            Make Your Own <span>Smart Plan</span>
          </MainTilte>
          <MainInputBox>
            <CustomCalendar />
          </MainInputBox>
          <Main1Swiper>
            <Swiper spaceBetween={10} slidesPerView="auto">
              <SwiperSlide>
                <img src={M1Img1} />
                <M1_TxtBox>
                  <M1_Title>Hong Kong</M1_Title>
                  <M1_Desc>12 PLANS</M1_Desc>
                </M1_TxtBox>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M1Img2} />
                <M1_TxtBox>
                  <M1_Title>Seoul</M1_Title>
                  <M1_Desc>0 PLANS</M1_Desc>
                </M1_TxtBox>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M1Img3} />
                <M1_TxtBox>
                  <M1_Title>Macau</M1_Title>
                  <M1_Desc>4 PLANS</M1_Desc>
                </M1_TxtBox>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M1Img1} />
                <M1_TxtBox>
                  <M1_Title>Hong Kong</M1_Title>
                  <M1_Desc>12 PLANS</M1_Desc>
                </M1_TxtBox>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M1Img2} />
                <M1_TxtBox>
                  <M1_Title>Seoul</M1_Title>
                  <M1_Desc>0 PLANS</M1_Desc>
                </M1_TxtBox>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M1Img3} />
                <M1_TxtBox>
                  <M1_Title>Macau</M1_Title>
                  <M1_Desc>4 PLANS</M1_Desc>
                </M1_TxtBox>
              </SwiperSlide>
            </Swiper>
          </Main1Swiper>
          <SmallButton>View All Plans</SmallButton>
        </MainSection>

        <MainSection>
          <MainTilte>
            <span>How</span> Does It Work?
          </MainTilte>
          <Main2Swiper>
            <Swiper
              loop={true}
              speed="500"
              autoplay={{
                delay: 4000,
                disableOnInteraction: false,
              }}
              pagination={{
                el: ".main2_pagination",
                clickable: true,
              }}
              modules={[Autoplay, Pagination]}
            >
              <SwiperSlide>
                <M2_TxtBox>
                  <M2_Title>
                    <M2_Num>01</M2_Num>
                    Pick My Plan
                  </M2_Title>
                  <M2_Desc>
                    나의 여행 목적에 <br />
                    맞는 플랜을 선택하세요
                  </M2_Desc>
                </M2_TxtBox>
                <M2_Icon src={M2Img1}></M2_Icon>
              </SwiperSlide>
              <SwiperSlide>
                <M2_TxtBox>
                  <M2_Title>
                    <M2_Num>02</M2_Num>
                    Customize Your Plan
                  </M2_Title>
                  <M2_Desc>
                    필요 없는 일정은 제거하고 <br />
                    원하는 옵션으로 변경하세요
                  </M2_Desc>
                </M2_TxtBox>
                <M2_Icon src={M2Img2}></M2_Icon>
              </SwiperSlide>
              <SwiperSlide>
                <M2_TxtBox>
                  <M2_Title>
                    <M2_Num>03</M2_Num>
                    Go My Plan
                  </M2_Title>
                  <M2_Desc>
                    일행과 플랜을 공유하고 <br />
                    여행을 시작하세요
                  </M2_Desc>
                </M2_TxtBox>
                <M2_Icon src={M2Img3}></M2_Icon>
              </SwiperSlide>
            </Swiper>
            <Main2Pagination className="swiper-pagination main2_pagination"></Main2Pagination>
          </Main2Swiper>
        </MainSection>

        <MainSection>
          <MainTilte>
            <span>Plan</span> Creators
          </MainTilte>
          <Main3Swiper>
            <Swiper spaceBetween={10} slidesPerView="auto">
              <SwiperSlide>
                <img src={M3Img1} />
                <M3_Title>GoMyPlan Limited</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M3Img2} />
                <M3_Title>HK100Travel</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M3Img3} />
                <M3_Title>GoGoHongKong</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M3Img4} />
                <M3_Title>HK Snap Photo Louis</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M3Img5} />
                <M3_Title>EMJ Hong Kong Experience</M3_Title>
              </SwiperSlide>
            </Swiper>
          </Main3Swiper>
        </MainSection>

        <MainSection>
          <MainTilte>
            <span>Popular</span> Spots
          </MainTilte>
          <Main4Swiper>
            <Swiper spaceBetween={16} slidesPerView="auto">
              <SwiperSlide>
                <img src={M4Img1} />
                <M3_Title>Hong Kong Disneyland</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M4Img2} />
                <M3_Title>Temple Street</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M4Img3} />
                <M3_Title>Central Mid-Levels Escalator</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M4Img4} />
                <M3_Title>SOHO District</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M4Img5} />
                <M3_Title>Ngong Ping 360</M3_Title>
              </SwiperSlide>
            </Swiper>
          </Main4Swiper>
        </MainSection>

        <MainSection className="banner">
          <MainTilte>
            <span>New</span> Promotions
          </MainTilte>
          <Main5Swiper>
            <Swiper
              loop={true}
              autoplay={{
                delay: 4000,
                disableOnInteraction: false,
              }}
              speed="500"
              navigation={true}
              modules={[Autoplay, Navigation]}
            >
              <SwiperSlide>
                <img src={M5Img1} />
              </SwiperSlide>
              <SwiperSlide>
                <img src={M5Img2} />
              </SwiperSlide>
            </Swiper>
          </Main5Swiper>
        </MainSection>

        <MainSection>
          <MainTilte>
            <span>Popular</span> Spots
          </MainTilte>
          <Main4Swiper>
            <Swiper spaceBetween={16} slidesPerView="auto">
              <SwiperSlide>
                <img src={M6Img1} />
                <M3_Title>Hong Kong Smart Plan (2 Nights)</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M6Img2} />
                <M3_Title>Hong Kong Smart Plan (3 Nights)</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M6Img3} />
                <M3_Title>Hong Kong Disneyland Plan</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M6Img4} />
                <M3_Title>Hong Kong + Macau Day Trip Plan</M3_Title>
              </SwiperSlide>
              <SwiperSlide>
                <img src={M6Img5} />
                <M3_Title>Macau Smart Plan (2 Nights)</M3_Title>
              </SwiperSlide>
            </Swiper>
          </Main4Swiper>
        </MainSection>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav active="home" />
    </>
  );
};

export default Main;
