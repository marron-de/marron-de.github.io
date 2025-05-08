import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Card from "react-bootstrap/Card";
import Modal from "react-bootstrap/Modal";

// Swiper
import { Swiper, SwiperSlide } from "swiper/react";
import { Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import CustomCalendar from "../components/CustomCalendar";
import CountButton from "../components/CountButton";
import BigButton from "../components/BigButton";

// img
import SpotsImg from "../assets/img/spots_detail.jpg";
import SpotsThum1 from "../assets/img/spots_img1.jpg";
import SpotsThum2 from "../assets/img/spots_img2.jpg";
import SpotsThum3 from "../assets/img/spots_img3.jpg";
import SpotsThum4 from "../assets/img/spots_img4.jpg";
import MapImg from "../assets/img/mpa_img.jpg";
import MapImg2 from "../assets/img/map_img2.png";
import Profile from "../assets/img/member_profile.png";
import DetailMain from "../assets/img/detail_main.png";
import ListIcon from "../assets/img/icon_list.png";
import PlanDetailThum1 from "../assets/img/plan_detail_thum1.png";
import PlanDetailThum2 from "../assets/img/plan_detail_thum2.png";
import PlanDetailThum3 from "../assets/img/plan_detail_thum3.png";
import PlanDetailThum4 from "../assets/img/plan_detail_thum4.png";
import DetailSubimg1 from "../assets/img/detail_subimg1.png";
import DetailSubimg2 from "../assets/img/detail_subimg2.png";
import DetailSubimg3 from "../assets/img/detail_subimg3.png";
import DetailSubimg4 from "../assets/img/detail_subimg4.png";
import DetailSubimg5 from "../assets/img/detail_subimg5.png";

// style
const SpotsPhotoBox = styled.div`
  position: relative;
`;

const SpotsPhotoImg = styled.div`
  position: relative;
  width: 100%;
  aspect-ratio: 1 / 0.5384615;
  display: flex;
  overflow: hidden;

  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  &::after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.4));
  }

  .swiper-pagination {
    background: rgba(8, 41, 79, 0.9);
    border-radius: 6px;
    padding: 4px 10px;
    font-weight: 500;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-white);
    width: auto;
    top: 20px;
    bottom: auto;
    left: auto;
    right: 20px;
  }
`;

const SpotsContent1 = styled.div`
  padding: 20px;
  border-bottom: 1px solid var(--color-border);
  margin-bottom: 40px;
  display: flex;
  flex-direction: column;
  gap: 40px;
  transition: var(--transition);

  .darkMode & {
    border-bottom: 1px solid var(--color-border);
  }
`;

const SpotsContent2 = styled.div`
  padding: 0 20px;
  margin-bottom: 40px;
`;

const SpotsContent3 = styled.div`
  padding: 0 20px;
  margin-bottom: 10px;
`;

const SpotsTitBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;

  &.cardver {
    gap: 14px;
  }
`;

const SpotsTxtTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  transition: var(--transition);

  span {
    flex: 1;
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const SpotsTxtTitleBadge = styled.div`
  border-radius: 4px;
  padding: 4px 10px;
  background: var(--color-default);
  font-family: var(--third-family);
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-white);
`;

const SpotsTxtDesc = styled.div`
  font-family: var(--lang-all);
  font-weight: 400;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const CountBtnBox = styled.div`
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 20px;
`;

const Map = styled.img`
  width: 100%;
  border-radius: 10px;
`;

const PlanTxtTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  transition: var(--transition);

  &.blue {
    color: var(--color-default);
  }

  span {
    flex: 1;
  }

  .darkMode & {
    color: var(--color-bg2);
  }

  .darkMode &.blue {
    color: var(--color-input);
  }
`;

const CardList = styled.div`
  display: flex;
`;

const CardIcon = styled.button`
  background: url(${ListIcon}) no-repeat center / contain;
  width: 18px;
  aspect-ratio: 1 / 1;
  position: absolute;
  left: 20px;
  top: 20px;
`;

const ProfileBox = styled.div`
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  display: flex;
  align-items: center;
  gap: 16px;
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const ProfileImg = styled.img`
  width: 40px;
  aspect-ratio: 1 / 1;
  box-shadow: 0 0 4px 0 rgba(0, 74, 123, 0.4);
  border-radius: 50%;
`;

const ProfileTxtBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 6xp;
`;

const ProfileTItle = styled.p`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const ProfileDesc = styled.p`
  font-weight: 400;
  font-size: 10px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const DetailMainBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 30px;
  margin-bottom: 10px;
  transition: var(--transition);

  .darkMode & {
    border-color: var(--color-gray);
  }
`;

const DetailMainImg = styled.img`
  width: 100%;
  border-radius: 10px;
`;

const DetailMainTxt = styled.p`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const DetailNotiBox = styled.div`
  width: 100%;
  margin-top: 10px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 30px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  transition: var(--transition);

  .darkMode & {
    border-color: var(--color-gray);
  }
`;

const DetailSmallTitle = styled.p`
  font-family: var(--font-family);
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  &.blue {
    color: var(--color-default);
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const DetailNotiList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;
`;

const DetailNotiItem = styled.div`
  position: relative;
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  padding-left: 0.9em;
  transition: var(--transition);

  &::before {
    content: "";
    border-radius: 100px;
    background: var(--color-point);
    width: 3px;
    aspect-ratio: 1 / 1;
    position: absolute;
    left: 0;
    top: 0.5em;
    transition: var(--transition);
  }

  .darkMode & {
    color: var(--color-border);
  }
`;

const DetailMapBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;

  img {
    width: 100%;
  }
`;

const DetailSpotBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;
`;

const DetailSpotList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
`;

const DetailSpotItem = styled.div`
  display: flex;
  flex-direction: column;
  gap: 8px;
  width: 100%;
`;

const DetailSpotImg = styled.img`
  width: 100%;
  border-radius: 10px;
  margin-bottom: 6px;
`;

const DetailSpotTitle = styled.div`
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-point);
  }
`;

const DetailSpotDesc = styled.div`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const SpotsLocation = () => {
  const [customizeShow, setCustomizeShow] = useState(false);
  const [detailShow, setDetailShow] = useState(false);

  const customizeModalClose = () => setCustomizeShow(false);
  const customizeModalShow = () => setCustomizeShow(true);

  const detailModalClose = () => setDetailShow(false);
  const detailModalShow = () => setDetailShow(true);

  return (
    <>
      {/* Header */}
      <Header type="title" title="Spots Details - SOHO" />

      {/* contents */}
      <PageContainer padding="p-0">
        <PageContent>
          <SpotsPhotoBox>
            <SpotsPhotoImg>
              <Swiper loop={true} speed="500" pagination={{ type: "fraction" }} modules={[Pagination]}>
                <SwiperSlide>
                  <Card.Img src={SpotsImg} />
                </SwiperSlide>
                <SwiperSlide>
                  <Card.Img src={SpotsImg} />
                </SwiperSlide>
              </Swiper>
            </SpotsPhotoImg>
          </SpotsPhotoBox>

          <SpotsContent1>
            <SpotsTitBox>
              <SpotsTxtTitle>
                <span> SOHO</span>
                <SpotsTxtTitleBadge>Location</SpotsTxtTitleBadge>
              </SpotsTxtTitle>
              <SpotsTxtDesc>Central, Hong Kong</SpotsTxtDesc>
            </SpotsTitBox>
            <SpotsTitBox>
              <SpotsTxtTitle>
                <span> Description:</span>
              </SpotsTxtTitle>
              <SpotsTxtDesc>
                The SoHo (Chinese: 蘇豪; also 荷南 and 荷南美食區; formally 中環蘇豪區) district in Hong Kong is an entertainment zone located in Central. It
                borders Lan Kwai Fong and Sheung Wan districts. The name is derived from its location: South of Hollywood Road.
              </SpotsTxtDesc>
              <CountBtnBox>
                <CountButton type="like" count="999" active="active"></CountButton>
                <CountButton type="chat" count="0"></CountButton>
                <CountButton type="share" count="0"></CountButton>
              </CountBtnBox>
            </SpotsTitBox>
          </SpotsContent1>

          <SpotsContent2>
            <SpotsTitBox className="cardver">
              <SpotsTxtTitle>
                <span> View on Google Maps:</span>
              </SpotsTxtTitle>
              <Map src={MapImg}></Map>
            </SpotsTitBox>
          </SpotsContent2>

          <SpotsContent3>
            <SpotsTitBox className="cardver">
              <SpotsTxtTitle>Recommended Plan</SpotsTxtTitle>
              <CustomCalendar />
              <div className="cardList">
                <Card>
                  <Card.Img onClick={detailModalShow} src={SpotsThum1} />
                  <Card.Body>
                    <div className="card_top">{/* <div className="card_badge">Custom</div> */}</div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Hong Kong Smart Plan (2 Days 3 Nights)</Card.Title>
                      <Card.Text>Temple Street, Peak Tram, Victoria Peak, Symphony of Lights</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                        <p className="price_desc">*Total up to 4 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={SpotsThum2} />
                  <Card.Body>
                    <div className="card_top">{/* <div className="card_badge">Custom</div> */}</div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Night Goblin Plan HK</Card.Title>
                      <Card.Text>Victoria Peak, Repulse Bay</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $170</span>
                        </p>
                        <p className="price_desc">*Total up to 1 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={SpotsThum3} />
                  <Card.Body>
                    <div className="card_top">
                      {/* <div className="card_badge">Custom</div> */}
                    </div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>4 Day 3 Night Modern Family Package</Card.Title>
                      <Card.Text>Victoria Peak, Central-Mid-Levels escalator, Repulse Bay</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                        <p className="price_desc">*Total up to 4 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={SpotsThum4} />
                  <Card.Body>
                    <div className="card_top">
                      {/* <div className="card_badge">Custom</div> */}
                    </div>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Hong Kong Macau Bus Tour</Card.Title>
                      <Card.Text>Victoria Peak, Central-Mid-Levels escalator, Repulse Bay</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $100</span>
                        </p>
                        <p className="price_desc">*Total up to 1 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              </div>
            </SpotsTitBox>
          </SpotsContent3>
        </PageContent>
        <PageBtnbox>
          <BigButton>7 Plans (Explore All ➙)</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />

      {/* Customize Modal */}
      <Modal show={customizeShow} onHide={customizeModalClose} className="type1">
        <Modal.Header closeButton>
          <Modal.Title>Macau 5-Hour Afternoon Tour</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <CardList className="cardList ver2">
            <Card>
              <Card.Img src={PlanDetailThum1} />
              <CardIcon></CardIcon>
              <Card.Body>
                <div className="card_content">
                  <Card.Title>Free Itinerary</Card.Title>
                  <Card.Text>Add various options to complete your plan!</Card.Text>
                </div>
                <div className="infobox">
                  <div className="right">
                    <p className="price_wrap">
                      Per person
                      <span className="price">USD $0</span>
                    </p>
                  </div>
                </div>
              </Card.Body>
            </Card>
            <Card>
              <Card.Img src={PlanDetailThum2} />
              <CardIcon></CardIcon>
              <Card.Body>
                <div className="card_content">
                  <Card.Title>Lorem Ipsum Dolor Sit Amet</Card.Title>
                  <Card.Text>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus
                    tincidunt odio eget maximus. Nam a risus eget enim interdum congue nec ut lectus consequat pellentesque.
                  </Card.Text>
                </div>
                <div className="infobox">
                  <div className="right">
                    <p className="price_wrap">
                      Per person
                      <span className="price">USD $30</span>
                    </p>
                  </div>
                </div>
              </Card.Body>
            </Card>
            <Card>
              <Card.Img src={PlanDetailThum3} />
              <CardIcon></CardIcon>
              <Card.Body>
                <div className="card_content">
                  <Card.Title>Lorem Ipsum Dolor Sit Amet</Card.Title>
                  <Card.Text>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus
                    tincidunt odio eget maximus. Nam a risus eget enim interdum congue nec ut lectus consequat pellentesque.
                  </Card.Text>
                </div>
                <div className="infobox">
                  <div className="right">
                    <p className="price_wrap">
                      Per person
                      <span className="price">USD $10</span>
                    </p>
                  </div>
                </div>
              </Card.Body>
            </Card>
            <Card>
              <Card.Img src={PlanDetailThum4} />
              <CardIcon></CardIcon>
              <Card.Body>
                <div className="card_content">
                  <Card.Title>Lorem Ipsum Dolor Sit Amet</Card.Title>
                  <Card.Text>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus
                    tincidunt odio eget maximus. Nam a risus eget enim interdum congue nec ut lectus consequat pellentesque.
                  </Card.Text>
                </div>
                <div className="infobox">
                  <div className="right">
                    <p className="price_wrap">
                      Per person
                      <span className="price">USD $30</span>
                    </p>
                  </div>
                </div>
              </Card.Body>
            </Card>
          </CardList>
        </Modal.Body>
        <Modal.Footer className="border_none">
          <BigButton onClick={customizeModalClose}>Customize</BigButton>
        </Modal.Footer>
      </Modal>

      {/* Detail Modal */}
      <Modal show={detailShow} onHide={detailModalClose} className="type1">
        <Modal.Header closeButton>
          <Modal.Title>Macau 5-Hour Afternoon Tour</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <DetailMainBox>
            <DetailMainImg src={DetailMain}></DetailMainImg>
            <DetailMainTxt>
              What if you plan to spend 5 hours in Macau?? We will pick out the key points and show you everything in a half day!
              <br /> <br />
              You can see the world cultural heritage area where Portuguese history and culture that began in the 16th century + the casino resort and night
              view in one day
              <br /> <br />
              Dinner is not included. However, the guide will do his best to help you with everything from meal information to the subsequent schedule.
              <br /> <br />
              Meeting time: 3:30 PM (Macau local time)
            </DetailMainTxt>
          </DetailMainBox>

          <ProfileBox>
            <ProfileImg src={Profile}></ProfileImg>
            <ProfileTxtBox>
              <ProfileTItle>GoGoHongKong</ProfileTItle>
              <ProfileDesc>
                This is a 4 days and 3 nights plan to enjoy with family, friends, and lovers (in collaboration with 500,000 YouTuber Moochul Couple)
              </ProfileDesc>
            </ProfileTxtBox>
          </ProfileBox>

          <DetailNotiBox>
            <DetailSmallTitle>Tour Notice</DetailSmallTitle>
            <DetailNotiList>
              <DetailNotiItem>
                This is a walking tour using public transportation. There may be large crowds at the tourist attractions you visit during the itinerary, so
                please wear as light clothing as possible.
              </DetailNotiItem>
              <DetailNotiItem>This option includes walking distance, including stairs. We recommend wearing comfortable shoes.</DetailNotiItem>
              <DetailNotiItem>
                lease go to the designated meeting location 10 minutes in advance and wait. Refunds are not possible for no-shows or late arrivals after the
                option has started.
              </DetailNotiItem>
            </DetailNotiList>
          </DetailNotiBox>

          <DetailMapBox>
            <PlanTxtTitle>
              <span>View on Google Maps:</span>
            </PlanTxtTitle>
            <img src={MapImg2} />
          </DetailMapBox>

          <DetailSpotBox>
            <PlanTxtTitle>
              <span>Spot(s) Visiting:</span>
            </PlanTxtTitle>
            <DetailSpotList>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg1}></DetailSpotImg>
                <DetailSpotTitle>1. The Outer Harbour Ferry Terminal </DetailSpotTitle>
                <DetailSpotDesc>
                  Please find your guide on the 1st floor of Macau Outer Ferry Terminal, in front of the Tourist Information Center.
                </DetailSpotDesc>
              </DetailSpotItem>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg2}></DetailSpotImg>
                <DetailSpotTitle>2. Rua de Felicidade</DetailSpotTitle>
                <DetailSpotDesc>
                  Rua da Felicidade (literally translated as ‘Street of Happiness’) was once the heart of Macau’s red light district, which is how it got its
                  name. Nowadays, Rua da Felicidade is not only an authentic shopping street where you can buy local products, but there are also several local
                  restaurants serving Cantonese and Macanese food, including soup noodles, yum cha delicacies, and more. Other traditional shops include
                  products such as tea, dried meat, typical sweets and desserts, among others.
                </DetailSpotDesc>
              </DetailSpotItem>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg3}></DetailSpotImg>
                <DetailSpotTitle>3. Senado Square</DetailSpotTitle>
                <DetailSpotDesc>
                  Senado Square or Senate Square (Portuguese: Largo do Senado, Chinese: 議事亭前地, Cantonese Yale: Yíh Sih Tìhng Chìhn Deih) is a town square
                  in Macau, China, and part of the UNESCO Historic Center. Macau World Cultural Heritage. It is shaped like an elongated triangle and connects
                  Largo do São Domingos at one end and Avenida de Almeida Ribeiro at the other. It covers an area of 3,700 square meters (4,425 square yards).
                </DetailSpotDesc>
              </DetailSpotItem>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg4}></DetailSpotImg>
                <DetailSpotTitle>4. Saint Dominic&apos;s Church</DetailSpotTitle>
                <DetailSpotDesc>
                  The Church of St. Dominic (Chinese: 板樟堂, Portuguese: Igreja de São Domingos) is a late 16th-century Baroque church serving the cathedral
                  parish of the Roman Catholic Diocese of Macau. It is located in the peninsula part of the city in Largo de São Domingos, near the Leal Senado
                  building.
                </DetailSpotDesc>
              </DetailSpotItem>
              <DetailSpotItem>
                <DetailSpotImg src={DetailSubimg5}></DetailSpotImg>
                <DetailSpotTitle>5. The Ruins of Saint Paul&apos;s</DetailSpotTitle>
                <DetailSpotDesc>
                  The Ruins of St. Paul&apos;s (Chinese: 大三巴牌坊, Portuguese: Ruínas de São Paulo) are the remains of a 17th-century Portuguese cathedral in
                  Macau, dedicated to Saint Paul, an apostle of Jesus. It is the most famous historical building.
                </DetailSpotDesc>
              </DetailSpotItem>
            </DetailSpotList>
          </DetailSpotBox>
        </Modal.Body>
      </Modal>
    </>
  );
};

export default SpotsLocation;
